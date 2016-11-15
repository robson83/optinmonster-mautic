Simple plugin to allow services like OptinMonster to be integrated to Mautic.


OptinMonster is a paid service that allows you to design forms, lightboxes and configure them in a different variety of ways. But it needs a lead service tool in order to work - and out-of-the-box, no opensource or free service is available.

The goal of this plugin is exposing a webhook and insert the lead into a form, as you were submitting a form post.

Still under development, and should be adding more features soon.

Installation:

- Just copy the folder directly into your plugins directory and clear you cache. Either doing php app/console cache:clear or rm -rf app/cache;
- Create a form, adding name and email as the requested fields - use that name for them, too, as the plugin expects this way. Map the fields to the corresponding leads fields;
- After saving, your form will have an id. You can find this id, clicking on your forms page - will look like this: yourmauticwebsite.com/s/forms/view/1 - where 1 is the form id;
- Go to optinmonster, click over our desired optin and move to integrations. Click add another integration, and select webhook. On webhook url, type the url: yourmauticwebsite.com/formwebhook/id - where yourmauticwebsite.com is your domain, and id and the number you got in the previous step
- After saving, you should have a lead with the email hello@optinmonster.com. You may delete it.

More to come.

