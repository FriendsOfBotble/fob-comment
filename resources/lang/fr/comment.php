<?php

return [
    'common' => [
        'name' => 'Nom',
        'email' => 'E-mail',
        'phone' => 'Téléphone',
        'website' => 'Site web',
        'comment' => 'Commentaire',
        'email_placeholder' => 'Votre adresse e-mail ne sera pas publiée.',
        'website_placeholder' => 'ex. https://example.com',
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
            'waiting_for_approval_message' => 'Votre commentaire est en attente de modération. Ceci est un aperçu, votre commentaire sera visible après son approbation.',
        ],

        'form' => [
            'title' => 'Laisser un commentaire',
            'description' => 'Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont marqués *',
            'description_email_optional' => 'Votre adresse email ne sera pas publiée. L\'email est facultatif. Les champs obligatoires sont marqués *',
            'cookie_consent' => 'Enregistrer mon nom, e-mail et site web dans ce navigateur pour mon prochain commentaire.',
            'submit' => 'Publier le commentaire',
        ],

        'comment_success_message' => 'Votre commentaire a été envoyé avec succès.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'En attente',
            'approved' => 'Approuvé',
            'spam' => 'Spam',
            'trash' => 'Corbeille',
        ],
    ],

    'settings' => [
        'title' => 'Commentaires FOB',
        'description' => 'Configurer les paramètres pour FOB Comment',
        'form' => [
            'enable_recaptcha' => 'Activer reCAPTCHA',
            'enable_recaptcha_help' => 'Vous devez activer reCAPTCHA dans :url pour utiliser cette fonctionnalité.',
            'captcha_setting_label' => 'Paramètres Captcha',
            'comment_moderation' => 'Les commentaires doivent être approuvés manuellement',
            'comment_moderation_help' => 'Tous les commentaires doivent être approuvés manuellement par un administrateur avant d\'être affichés sur le frontend.',
            'show_comment_cookie_consent' => 'Afficher la case à cocher des cookies de commentaires, permettant aux visiteurs de sauvegarder leurs informations dans le navigateur',
            'auto_fill_comment_form' => 'Remplissage automatique des données de commentaire pour les utilisateurs connectés',
            'auto_fill_comment_form_help' => 'Le formulaire de commentaire sera automatiquement rempli avec les données de l\'utilisateur telles que le nom complet, l\'e-mail, etc., s\'ils sont connectés.',
            'comment_order' => 'Trier les commentaires par',
            'comment_order_help' => 'Choisissez l\'ordre préféré pour afficher les commentaires dans la liste.',
            'comment_order_choices' => [
                'asc' => 'Plus anciens',
                'desc' => 'Plus récents',
            ],
            'display_admin_badge' => 'Afficher le badge administrateur pour les commentaires des administrateurs',
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
        ],
    ],
];
