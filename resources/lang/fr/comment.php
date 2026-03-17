<?php

return [
    'common' => [
        'name' => 'Nom',
        'email' => 'E-mail',
        'phone' => 'Téléphone',
        'website' => 'Site web',
        'comment' => 'Commentaire',
        'email_placeholder' => 'Votre adresse e-mail ne sera pas publiée.',
        'name_placeholder' => 'Votre nom',
        'website_placeholder' => 'ex. https://example.com',
        'comment_placeholder' => 'Écrivez votre commentaire ici...',
    ],

    'title' => 'Commentaires',
    'author' => 'Auteur',
    'responded_to' => 'Réponse à',
    'permalink' => 'Permalien',
    'url' => 'URL',
    'submitted_on' => 'Soumis le',
    'edit_comment' => 'Modifier le commentaire',
    'reply' => 'Répondre',
    'in_reply_to' => 'En réponse à :name',

    'reply_modal' => [
        'title' => 'Répondre à :comment',
        'cancel' => 'Annuler',
    ],

    'allow_comments' => 'Autoriser les commentaires',

    'front' => [
        'admin_badge' => 'Administrateur',

        'list' => [
            'title' => ':count commentaire|:count commentaires',
            'title_singular' => ':count commentaire',
            'title_plural' => ':count commentaires',
            'reply' => 'Répondre',
            'reply_to' => 'Répondre à :name',
            'cancel_reply' => 'Annuler la réponse',
            'delete' => 'Supprimer',
            'delete_confirm' => 'Êtes-vous sûr de vouloir supprimer ce commentaire ?',
            'waiting_for_approval_message' => 'Votre commentaire est en attente de modération. Ceci est un aperçu, votre commentaire sera visible après son approbation.',
        ],

        'form' => [
            'title' => 'Laisser un commentaire',
            'description' => 'Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont marqués *',
            'description_email_optional' => 'Votre adresse email ne sera pas publiée. L\'email est facultatif. Les champs obligatoires sont marqués *',
            'cookie_consent' => 'Enregistrer mon nom, e-mail et site web dans ce navigateur pour mon prochain commentaire.',
            'submit' => 'Publier le commentaire',
            'login_required' => 'Vous devez être connecté pour publier un commentaire.',
            'login_to_comment' => 'Se connecter pour commenter',
        ],

        'comment_success_message' => 'Votre commentaire a été envoyé avec succès.',
        'rate_limit_error' => 'Vous commentez trop vite. Veuillez attendre :seconds secondes avant de publier un autre commentaire.',
        'comment_deleted_message' => 'Votre commentaire a été supprimé avec succès.',
        'delete_not_authorized' => 'Vous n\'êtes pas autorisé à supprimer ce commentaire.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'En attente',
            'approved' => 'Approuvé',
            'spam' => 'Spam',
            'trash' => 'Corbeille',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Nouveau commentaire reçu',
        'admin_new_comment_message' => ':comment_name a laissé un nouveau commentaire',
        'comment_reply_title' => 'Nouvelle réponse à votre commentaire',
        'comment_reply_message' => ':reply_name a répondu à votre commentaire',
        'commented_on' => 'A commenté sur',
        'view_comment' => 'Voir le commentaire',
    ],

    'settings' => [
        'title' => 'Commentaires FOB',
        'description' => 'Configurer les paramètres pour FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Commentaire',
                'description' => 'Modèles d\'email pour les notifications de commentaires',
                'admin_new_comment' => [
                    'title' => 'Notification administrateur pour un nouveau commentaire',
                    'description' => 'Envoyer un email à l\'administrateur lorsqu\'un nouveau commentaire est publié',
                    'subject' => 'Nouveau commentaire sur {{ site_title }}',
                    'comment_name_description' => 'Nom de l\'auteur du commentaire',
                    'comment_email_description' => 'Email de l\'auteur du commentaire',
                    'comment_content_description' => 'Contenu du commentaire',
                    'comment_reference_description' => 'La page/publication commentée',
                    'comment_url_description' => 'URL pour voir le commentaire',
                ],
                'comment_reply' => [
                    'title' => 'Notifier le commentateur d\'une réponse',
                    'description' => 'Envoyer un email au commentateur lorsque quelqu\'un répond à son commentaire',
                    'subject' => 'Nouvelle réponse à votre commentaire sur {{ site_title }}',
                    'comment_name_description' => 'Nom du commentateur original',
                    'reply_name_description' => 'Nom de l\'auteur de la réponse',
                    'reply_content_description' => 'Contenu de la réponse',
                    'comment_reference_description' => 'La page/publication commentée',
                    'comment_url_description' => 'URL pour voir le commentaire',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Activer reCAPTCHA',
            'enable_recaptcha_help' => 'Vous devez activer reCAPTCHA dans :url pour utiliser cette fonctionnalité.',
            'captcha_setting_label' => 'Paramètres Captcha',
            'disable_guest_comment' => 'Désactiver les commentaires des invités',
            'disable_guest_comment_help' => 'Lorsque cette option est activée, les utilisateurs doivent être connectés pour publier des commentaires. Cela aide à réduire les commentaires indésirables.',
            'comment_moderation' => 'Les commentaires doivent être approuvés manuellement',
            'comment_moderation_help' => 'Tous les commentaires doivent être approuvés manuellement par un administrateur avant d\'être affichés sur le frontend.',
            'rate_limit_seconds' => 'Limite de taux (secondes)',
            'rate_limit_seconds_help' => 'Temps minimum en secondes entre les commentaires du même utilisateur. Réglez sur 0 pour désactiver la limite de taux.',
            'show_comment_cookie_consent' => 'Afficher la case à cocher des cookies de commentaires, permettant aux visiteurs de sauvegarder leurs informations dans le navigateur',
            'show_comment_cookie_consent_help' => 'Lorsque activé, les visiteurs peuvent enregistrer leur nom, email et site web dans leur navigateur pour les commentaires futurs.',
            'auto_fill_comment_form' => 'Remplissage automatique des données de commentaire pour les utilisateurs connectés',
            'auto_fill_comment_form_help' => 'Le formulaire de commentaire sera automatiquement rempli avec les données de l\'utilisateur telles que le nom complet, l\'e-mail, etc., s\'ils sont connectés.',
            'comment_order' => 'Trier les commentaires par',
            'comment_order_help' => 'Choisissez l\'ordre préféré pour afficher les commentaires dans la liste.',
            'comment_order_choices' => [
                'asc' => 'Plus anciens',
                'desc' => 'Plus récents',
            ],
            'display_admin_badge' => 'Afficher le badge administrateur pour les commentaires des administrateurs',
            'display_admin_badge_help' => 'Lorsque activé, les commentaires des administrateurs afficheront un badge "Admin" à côté de leur nom.',
            'show_admin_role_name_for_admin_badge' => 'Afficher le nom du rôle d\'administrateur pour le badge administrateur',
            'show_admin_role_name_for_admin_badge_helper' => 'Si activé, le badge administrateur affichera le nom du rôle d\'administrateur au lieu du texte par défaut "Admin". Si le nom du rôle d\'administrateur est vide, le texte par défaut sera utilisé. Si l\'utilisateur a plusieurs rôles, le premier rôle sera utilisé.',
            'avatar_provider' => 'Fournisseur d\'avatar',
            'avatar_provider_help' => 'Choisissez comment générer les avatars pour les commentaires. Gravatar nécessite un e-mail, UI Avatars génère en fonction du nom.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Basé sur l\'e-mail)',
                'ui_avatars' => 'UI Avatars (Basé sur le nom)',
            ],
            'email_optional' => 'Rendre le champ e-mail facultatif',
            'email_optional_help' => 'Lorsqu\'activé, les visiteurs peuvent soumettre des commentaires sans fournir une adresse e-mail.',
            'show_website_field' => 'Afficher le champ site web dans le formulaire de commentaire',
            'show_website_field_help' => 'Lorsque cette option est désactivée, le champ site web sera masqué du formulaire de commentaire public.',
            'default_avatar' => 'Avatar par défaut',
            'default_avatar_helper' => 'Avatar par défaut pour l\'auteur lorsqu\'il n\'a pas d\'avatar. Si vous ne sélectionnez aucune image, elle sera générée en utilisant Gravatar. La taille de l\'image doit être de 150x150px.',
            'allow_author_delete' => 'Autoriser les auteurs à supprimer leurs commentaires',
            'allow_author_delete_help' => 'Lorsque activé, les utilisateurs connectés peuvent supprimer leurs propres commentaires.',
            'primary_color' => 'Couleur principale',
            'primary_color_helper' => 'Couleur principale pour les boutons, cases à cocher et badges. Laissez vide pour utiliser la couleur principale du thème.',
            'primary_color_hover' => 'Couleur principale au survol',
            'primary_color_hover_helper' => 'Couleur au survol pour les boutons. Laissez vide pour utiliser une teinte plus foncée de la couleur principale.',
        ],
    ],
];
