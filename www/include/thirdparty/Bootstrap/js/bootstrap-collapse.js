!function(a) {
  var f = function(b, c) {
    this.$element = a(b);
    this.options = a.extend({}, a.fn.collapse.defaults, c);
    this.options.parent && (this.$parent = a(this.options.parent));
    this.options.toggle && this.toggle();
  };
  f.prototype = {constructor:f, dimension:function() {
    return this.$element.hasClass("width") ? "width" : "height";
  }, show:function() {
    var b, c, d, e;
    if (!this.transitioning && !this.$element.hasClass("in")) {
      b = this.dimension();
      c = a.camelCase(["scroll", b].join("-"));
      if ((d = this.$parent && this.$parent.find("> .accordion-group > .in")) && d.length) {
        if ((e = d.data("collapse")) && e.transitioning) {
          return;
        }
        d.collapse("hide");
        e || d.data("collapse", null);
      }
      this.$element[b](0);
      this.transition("addClass", a.Event("show"), "shown");
      a.support.transition && this.$element[b](this.$element[0][c]);
    }
  }, hide:function() {
    var b;
    !this.transitioning && this.$element.hasClass("in") && (b = this.dimension(), this.reset(this.$element[b]()), this.transition("removeClass", a.Event("hide"), "hidden"), this.$element[b](0));
  }, reset:function(b) {
    var a = this.dimension();
    this.$element.removeClass("collapse")[a](b || "auto")[0].offsetWidth;
    this.$element[null !== b ? "addClass" : "removeClass"]("collapse");
    return this;
  }, transition:function(b, c, d) {
    var e = this, f = function() {
      "show" == c.type && e.reset();
      e.transitioning = 0;
      e.$element.trigger(d);
    };
    this.$element.trigger(c);
    c.isDefaultPrevented() || (this.transitioning = 1, this.$element[b]("in"), a.support.transition && this.$element.hasClass("collapse") ? this.$element.one(a.support.transition.end, f) : f());
  }, toggle:function() {
    this[this.$element.hasClass("in") ? "hide" : "show"]();
  }};
  var g = a.fn.collapse;
  a.fn.collapse = function(b) {
    return this.each(function() {
      var c = a(this), d = c.data("collapse"), e = a.extend({}, a.fn.collapse.defaults, c.data(), "object" == typeof b && b);
      d || c.data("collapse", d = new f(this, e));
      if ("string" == typeof b) {
        d[b]();
      }
    });
  };
  a.fn.collapse.defaults = {toggle:!0};
  a.fn.collapse.Constructor = f;
  a.fn.collapse.noConflict = function() {
    a.fn.collapse = g;
    return this;
  };
  a(document).on("click.collapse.data-api", "[data-toggle=collapse]", function(b) {
    var c = a(this), d;
    b = c.attr("data-target") || b.preventDefault() || (d = c.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, "");
    d = a(b).data("collapse") ? "toggle" : c.data();
    c[a(b).hasClass("in") ? "addClass" : "removeClass"]("collapsed");
    a(b).collapse(d);
  });
}(window.jQuery);
