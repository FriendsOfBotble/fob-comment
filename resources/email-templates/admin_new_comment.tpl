{{ header }}

<div class="bb-main-content">
    <table class="bb-box" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td class="bb-content bb-pb-0" align="center">
                    <table class="bb-icon bb-icon-lg bb-bg-blue" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td valign="middle" align="center">
                                    <img src="{{ 'message' | icon_url }}" class="bb-va-middle" width="40" height="40" alt="Icon">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1 class="bb-text-center bb-m-0 bb-mt-md">{{ 'plugins/fob-comment::comment.email_templates.admin_new_comment_title' | trans }}</h1>
                    <p class="bb-text-center bb-mt-sm bb-mb-0 bb-text-muted">
                        {{ 'plugins/fob-comment::comment.email_templates.admin_new_comment_message' | trans({'comment_name': comment_name}) }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="bb-content">
                                    <table cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f8f9fa; border-radius: 8px; border-left: 4px solid #206bc4;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 16px 20px;">
                                                    <p style="margin: 0 0 4px 0; font-weight: 600; font-size: 15px; color: #1e293b;">{{ comment_name }}</p>
                                                    {% if comment_email %}
                                                    <p style="margin: 0 0 12px 0; font-size: 13px; color: #94a3b8;">{{ comment_email }}</p>
                                                    {% endif %}
                                                    <p style="margin: 0; color: #475569; line-height: 1.6;">{{ comment_content }}</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {% if comment_reference %}
                                    <p style="margin: 16px 0 0 0; color: #64748b; font-size: 13px; text-align: center;">
                                        {{ 'plugins/fob-comment::comment.email_templates.commented_on' | trans }}: <strong style="color: #1e293b;">{{ comment_reference }}</strong>
                                    </p>
                                    {% endif %}
                                </td>
                            </tr>

                            {% if comment_url %}
                            <tr>
                                <td class="bb-content bb-text-center bb-pt-0 bb-pb-xl" align="center">
                                    <a href="{{ comment_url }}" class="bb-btn bb-bg-blue bb-border-blue">
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
