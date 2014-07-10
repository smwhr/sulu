define(function(){"use strict";var a="sulu.media-edit.",b={infoKey:"public.info",multipleEditTitle:"sulu.media.multiple-edit.title",instanceName:""},c={infoFormSelector:"#media-info",multipleEditFormSelector:"#media-multiple-edit",dropzoneSelector:"#file-version-change",multipleEditDescSelector:".media-description",descriptionCheckboxSelector:"#show-descriptions"},d=function(){return f.call(this,"edit")},e=function(){return f.call(this,"closed")},f=function(b){return a+(this.options.instanceName?this.options.instanceName+".":"")+b};return{templates:["/admin/media/template/media/info","/admin/media/template/media/multiple-edit"],initialize:function(){this.options=this.sandbox.util.extend(!0,{},b,this.options),this.bindCustomEvents(),this.sandbox.dom.width(this.$el,0),this.sandbox.dom.height(this.$el,0),this.media=null,this.medias=null,this.$info=null,this.$multiple=null},bindCustomEvents:function(){this.sandbox.on(d.call(this),this.editMedia.bind(this)),this.sandbox.on("husky.overlay.media-edit.closed",function(){this.sandbox.emit(e.call(this))}.bind(this))},editMedia:function(a){this.sandbox.dom.isArray(a)?this.editMultipleMedia(a):this.editSingleMedia(a)},editSingleMedia:function(a){this.media=a,this.$info=this.sandbox.dom.createElement(this.renderTemplate("/admin/media/template/media/info")),this.startSingleOverlay()},editMultipleMedia:function(a){this.medias=a,this.$multiple=this.sandbox.dom.createElement(this.renderTemplate("/admin/media/template/media/multiple-edit")),this.bindMultipleEditDomEvents(),this.startMultipleEditOverlay()},startSingleOverlay:function(){var a=this.sandbox.dom.createElement("<div/>");this.sandbox.dom.append(this.$el,a),this.sandbox.once("husky.overlay.media-edit.opened",function(){this.sandbox.form.create(c.infoFormSelector),this.sandbox.form.setData(c.infoFormSelector,this.media),this.startDropzone()}.bind(this)),this.sandbox.start([{name:"overlay@husky",options:{el:a,title:this.media.title,tabs:[{title:this.sandbox.translate(this.options.infoKey),data:this.$info}],openOnStart:!0,removeOnClose:!0,instanceName:"media-edit",propagateEvents:!1,okCallback:this.changeSingleModel.bind(this)}}])},startMultipleEditOverlay:function(){var a=this.sandbox.dom.createElement("<div/>");this.sandbox.dom.append(this.$el,a),this.sandbox.once("husky.overlay.media-multiple-edit.opened",function(){this.sandbox.form.create(c.multipleEditFormSelector).initialized.then(function(){this.sandbox.form.setData(c.multipleEditFormSelector,{records:this.medias}).then(function(){this.sandbox.emit("husky.overlay.media-multiple-edit.set-position")}.bind(this))}.bind(this))}.bind(this)),this.sandbox.start([{name:"overlay@husky",options:{el:a,title:this.sandbox.translate(this.options.multipleEditTitle),data:this.$multiple,openOnStart:!0,removeOnClose:!0,draggable:!1,propagateEvents:!1,instanceName:"media-multiple-edit",okCallback:this.changeMultipleModel.bind(this)}}])},bindMultipleEditDomEvents:function(){this.sandbox.dom.on(this.sandbox.dom.find(c.descriptionCheckboxSelector,this.$multiple),"change",this.toggleDescriptions.bind(this))},toggleDescriptions:function(){var a=this.sandbox.dom.is(this.sandbox.dom.find(c.descriptionCheckboxSelector,this.$multiple),":checked");a===!0?this.sandbox.dom.show(this.sandbox.dom.find(c.multipleEditDescSelector,this.$multiple)):this.sandbox.dom.hide(this.sandbox.dom.find(c.multipleEditDescSelector,this.$multiple)),this.sandbox.emit("husky.overlay.media-multiple-edit.set-position")},startDropzone:function(){this.sandbox.on("husky.dropzone.file-version-"+this.media.id+".files-added",function(a){this.media=a[0],this.sandbox.emit("sulu.media.collections.save-media",this.medias,null,!0),this.savedCallback()}.bind(this)),this.sandbox.start([{name:"dropzone@husky",options:{el:c.dropzoneSelector,url:"/admin/api/media/"+this.media.id,method:"POST",paramName:"fileVersion",showOverlay:!1,skin:"small",titleKey:"sulu.upload.small-dropzone-title",instanceName:"file-version-"+this.media.id}}])},changeSingleModel:function(){if(this.sandbox.form.validate(c.infoFormSelector)){var a=this.sandbox.form.getData(c.infoFormSelector);return this.media=this.sandbox.util.extend(!0,{},this.media,a),this.sandbox.emit("sulu.media.collections.save-media",this.media,this.savedCallback.bind(this)),this.media=null,!0}return!1},changeMultipleModel:function(){if(this.sandbox.form.validate(c.multipleEditFormSelector)){var a=this.sandbox.form.getData(c.multipleEditFormSelector);return this.medias=this.sandbox.util.extend(!0,[],this.medias,a.records),this.sandbox.emit("sulu.media.collections.save-media",this.medias,this.savedCallback.bind(this)),this.medias=null,!0}return!1},savedCallback:function(){this.sandbox.emit("sulu.labels.success.show","labels.success.media-save-desc","labels.success")}}});