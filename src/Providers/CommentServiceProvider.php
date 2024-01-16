<?php

namespace FriendsOfBotble\Comment\Providers;

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
            ->loadMigrations();

        PanelSectionManager::default()->beforeRendering(function () {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('fob-comment')
                    ->setTitle('Comment')
                    ->withIcon('ti ti-message-cog')
                    ->withDescription('Manage comment settings.')
                    ->withPriority(0)
                    ->withRoute('blog.settings')
            );
        });

        $this->app->booted(function () {
            add_filter(BASE_FILTER_PUBLIC_COMMENT_AREA, function (string $html, BaseModel $model) {
                return $html . view('plugins/fob-comment::comment', compact('model'))->render();
            }, 1, 2);
        });
    }
}
