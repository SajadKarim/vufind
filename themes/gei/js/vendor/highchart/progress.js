!function(s,e,r,t){s.widget("edu.progress",{options:{baseClass:"edu-progress",addClass:"edu-progress--fixed"},_create:function(){this.progress=s('<progress id="'+this.options.baseClass+'" class="'+this.options.baseClass+'" hidden max="100"></progress>'),this.progressBar=s('<div class="'+this.options.baseClass+'__bar"></div>'),this.progressValue=s('<div class="'+this.options.baseClass+'__value"></div>'),this.element.prepend(this.progress),this.progress.append(this.progressBar),this.progressBar.append(this.progressValue),this.options.addClass&&this.progress.addClass(this.options.addClass)},_destroy:function(){this.progress.remove(),this._destroy()},update:function(s){s>=0&&100>=s?(this.progress.removeAttr("hidden").attr("value",s),this.progressValue.css("width",s+"%")):this.hide()},show:function(){this.progress.removeAttr("hidden")},hide:function(){this.progress.attr("hidden",!0).removeAttr("value"),this.progressValue.removeAttr("style")}})}(jQuery,window,document);