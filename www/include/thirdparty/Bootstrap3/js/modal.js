+function(b) {
  function h(a, d) {
    return this.each(function() {
      var e = b(this), f = e.data("bs.modal"), g = b.extend({}, c.DEFAULTS, e.data(), "object" == typeof a && a);
      f || e.data("bs.modal", f = new c(this, g));
      if ("string" == typeof a) {
        f[a](d);
      } else {
        g.show && f.show(d);
      }
    });
  }
  var c = function(a, d) {
    this.options = d;
    this.$body = b(document.body);
    this.$element = b(a);
    this.$dialog = this.$element.find(".modal-dialog");
    this.originalBodyPad = this.isShown = this.$backdrop = null;
    this.scrollbarWidth = 0;
    this.ignoreBackdropClick = !1;
    this.options.remote && this.$element.find(".modal-content").load(this.options.remote, b.proxy(function() {
      this.$element.trigger("loaded.bs.modal");
    }, this));
  };
  c.VERSION = "3.3.6";
  c.TRANSITION_DURATION = 300;
  c.BACKDROP_TRANSITION_DURATION = 150;
  c.DEFAULTS = {backdrop:!0, keyboard:!0, show:!0};
  c.prototype.toggle = function(a) {
    return this.isShown ? this.hide() : this.show(a);
  };
  c.prototype.show = function(a) {
    var d = this, e = b.Event("show.bs.modal", {relatedTarget:a});
    this.$element.trigger(e);
    this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', b.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function() {
      d.$element.one("mouseup.dismiss.bs.modal", function(a) {
        b(a.target).is(d.$element) && (d.ignoreBackdropClick = !0);
      });
    }), this.backdrop(function() {
      var e = b.support.transition && d.$element.hasClass("fade");
      d.$element.parent().length || d.$element.appendTo(d.$body);
      d.$element.show().scrollTop(0);
      d.adjustDialog();
      e && d.$element[0].offsetWidth;
      d.$element.addClass("in");
      d.enforceFocus();
      var g = b.Event("shown.bs.modal", {relatedTarget:a});
      e ? d.$dialog.one("bsTransitionEnd", function() {
        d.$element.trigger("focus").trigger(g);
      }).emulateTransitionEnd(c.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(g);
    }));
  };
  c.prototype.hide = function(a) {
    a && a.preventDefault();
    a = b.Event("hide.bs.modal");
    this.$element.trigger(a);
    this.isShown && !a.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), b(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), b.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", b.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal());
  };
  c.prototype.enforceFocus = function() {
    b(document).off("focusin.bs.modal").on("focusin.bs.modal", b.proxy(function(a) {
      this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus");
    }, this));
  };
  c.prototype.escape = function() {
    if (this.isShown && this.options.keyboard) {
      this.$element.on("keydown.dismiss.bs.modal", b.proxy(function(a) {
        27 == a.which && this.hide();
      }, this));
    } else {
      this.isShown || this.$element.off("keydown.dismiss.bs.modal");
    }
  };
  c.prototype.resize = function() {
    if (this.isShown) {
      b(window).on("resize.bs.modal", b.proxy(this.handleUpdate, this));
    } else {
      b(window).off("resize.bs.modal");
    }
  };
  c.prototype.hideModal = function() {
    var a = this;
    this.$element.hide();
    this.backdrop(function() {
      a.$body.removeClass("modal-open");
      a.resetAdjustments();
      a.resetScrollbar();
      a.$element.trigger("hidden.bs.modal");
    });
  };
  c.prototype.removeBackdrop = function() {
    this.$backdrop && this.$backdrop.remove();
    this.$backdrop = null;
  };
  c.prototype.backdrop = function(a) {
    var d = this, e = this.$element.hasClass("fade") ? "fade" : "";
    if (this.isShown && this.options.backdrop) {
      var f = b.support.transition && e;
      this.$backdrop = b(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body);
      this.$element.on("click.dismiss.bs.modal", b.proxy(function(a) {
        this.ignoreBackdropClick ? this.ignoreBackdropClick = !1 : a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide());
      }, this));
      f && this.$backdrop[0].offsetWidth;
      this.$backdrop.addClass("in");
      a && (f ? this.$backdrop.one("bsTransitionEnd", a).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : a());
    } else {
      !this.isShown && this.$backdrop ? (this.$backdrop.removeClass("in"), e = function() {
        d.removeBackdrop();
        a && a();
      }, b.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : e()) : a && a();
    }
  };
  c.prototype.handleUpdate = function() {
    this.adjustDialog();
  };
  c.prototype.adjustDialog = function() {
    var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
    this.$element.css({paddingLeft:!this.bodyIsOverflowing && a ? this.scrollbarWidth : "", paddingRight:this.bodyIsOverflowing && !a ? this.scrollbarWidth : ""});
  };
  c.prototype.resetAdjustments = function() {
    this.$element.css({paddingLeft:"", paddingRight:""});
  };
  c.prototype.checkScrollbar = function() {
    var a = window.innerWidth;
    a || (a = document.documentElement.getBoundingClientRect(), a = a.right - Math.abs(a.left));
    this.bodyIsOverflowing = document.body.clientWidth < a;
    this.scrollbarWidth = this.measureScrollbar();
  };
  c.prototype.setScrollbar = function() {
    var a = parseInt(this.$body.css("padding-right") || 0, 10);
    this.originalBodyPad = document.body.style.paddingRight || "";
    this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth);
  };
  c.prototype.resetScrollbar = function() {
    this.$body.css("padding-right", this.originalBodyPad);
  };
  c.prototype.measureScrollbar = function() {
    var a = document.createElement("div");
    a.className = "modal-scrollbar-measure";
    this.$body.append(a);
    var b = a.offsetWidth - a.clientWidth;
    this.$body[0].removeChild(a);
    return b;
  };
  var k = b.fn.modal;
  b.fn.modal = h;
  b.fn.modal.Constructor = c;
  b.fn.modal.noConflict = function() {
    b.fn.modal = k;
    return this;
  };
  b(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(a) {
    var d = b(this), c = d.attr("href"), f = b(d.attr("data-target") || c && c.replace(/.*(?=#[^\s]+$)/, "")), c = f.data("bs.modal") ? "toggle" : b.extend({remote:!/#/.test(c) && c}, f.data(), d.data());
    d.is("a") && a.preventDefault();
    f.one("show.bs.modal", function(a) {
      if (!a.isDefaultPrevented()) {
        f.one("hidden.bs.modal", function() {
          d.is(":visible") && d.trigger("focus");
        });
      }
    });
    h.call(f, c, this);
  });
}(jQuery);
