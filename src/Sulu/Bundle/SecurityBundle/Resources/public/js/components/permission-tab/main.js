/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

define([], function() {
    'use strict';

    var renderForm = function() {
            var $form = this.sandbox.dom.createElement('<div id="permission-form-container"/>'),
                component = {
                    name: 'permission-tab/components/form@sulusecurity',
                    options: {
                        el: $form,
                        id: this.options.id,
                        type: this.options.type,
                        securityContext: this.options.securityContext
                    }
                };

            this.html($form);

            this.sandbox.start([component]);
        },

        bindCustomEvents = function() {
            this.sandbox.on('sulu.permission-tab.save', save.bind(this));
        },

        save = function(permissionData, action) {
            this.sandbox.emit('sulu.header.toolbar.item.loading', 'save');

            this.sandbox.util.ajax(
                '/admin/api/permissions',
                {
                    method: 'POST',
                    data: permissionData,
                    success: function() {
                        this.sandbox.emit('sulu.labels.success.show', 'labels.success.permissions-saved'); //todo: add/use translation
                        this.sandbox.emit('sulu.permission-tab.saved', permissionData, action);
                    }.bind(this),
                    error: function() {
                        this.sandbox.emit('sulu.header.toolbar.item.enable', 'save');
                        this.sandbox.emit('sulu.labels.error.show');
                    }.bind(this)
                }
            );
        };

    return {
        initialize: function() {
            renderForm.call(this);
            bindCustomEvents.call(this);
        }
    };
});
