{{ header }}

<div class="bb-main-content">
    <table class="bb-box" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="bb-content" align="center">
                                    <h1 class="bb-text-center bb-m-0">{{ 'plugins/fob-comment::comment.email_templates.admin_new_comment_title' | trans }}</h1>

                                    <p class="bb-text-center bb-mt-sm bb-mb-0 bb-text-muted">
                                        {{ 'plugins/fob-comment::comment.email_templates.admin_new_comment_message' | trans({'comment_name': comment_name}) }}
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td class="bb-content">
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8f9fa; border-radius: 8px;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 16px;">
                                                    <p style="margin: 0 0 8px 0; font-weight: 600;">{{ comment_name }} {% if comment_email %}&lt;{{ comment_email }}&gt;{% endif %}</p>
                                                    <p style="margin: 0; color: #6c757d;">{{ comment_content }}</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            {% if comment_reference %}
                            <tr>
                                <td class="bb-content bb-text-muted bb-text-center">
                                    {{ 'plugins/fob-comment::comment.email_templates.commented_on' | trans }}: <strong>{{ comment_reference }}</strong>
                                </td>
                            </tr>
                            {% endif %}

                            {% if comment_url %}
                            <tr>
                                <td class="bb-content" align="center">
                                    <a href="{{ comment_url }}" class="bb-btn bb-btn-primary" style="display: inline-block; padding: 10px 24px; text-decoration: none;">
                                        {{ 'plugins/fob-comment::comment.email_templates.view_comment' | trans }}
                                    </a>
                                </td>
                            </tr>
                            {% endif %}
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{ footer }}
