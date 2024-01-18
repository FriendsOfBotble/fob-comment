<?php

namespace FriendsOfBotble\Comment\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Facades\PanelSectionManager;
use Botble\Base\Models\BaseModel;
use Botble\Base\PanelSections\PanelSectionItem;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Setting\PanelSections\SettingOthersPanelSection;

class CommentServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/fob-comment')
            ->publishAssets()
            ->loadAndPublishViews()
            ->loadRoutes()
            ->loadAndPublishConfigurations(['permissions'])
            ->loadAndPublishTranslations()
            ->loadMigrations();

        DashboardMenu::default()->beforeRetrieving(function () {
            DashboardMenu::make()
                ->registerItem([
                    'id' => 'cms-plugins-fob-comment',
                    'priority' => 99,
                    'name' => 'plugins/fob-comment::comment.title',
                    'icon' => 'ti ti-messages',
                    'route' => 'fob-comment.comments.index',
                ]);
        });

        PanelSectionManager::default()->beforeRendering(function () {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('fob-comment')
                    ->setTitle(trans('plugins/fob-comment::comment.settings.title'))
                    ->withDescription(trans('plugins/fob-comment::comment.settings.description'))
                    ->withIcon('ti ti-message-cog')
                    ->withPriority(0)
                    ->withRoute('fob-comment.settings')
            );
        });

        $this->app->booted(function () {
            add_filter(BASE_FILTER_PUBLIC_COMMENT_AREA, function (string $html, BaseModel $model) {
                return $html . view('plugins/fob-comment::comment', compact('model'))->render();
            }, 1, 2);
        });
    }
}
