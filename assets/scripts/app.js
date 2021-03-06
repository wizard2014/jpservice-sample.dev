$(function() {
    'use strict';

    /******************************************************************************
     material init
     *******************************************************************************/
    $.material.init();

    /******************************************************************************
     generate random value between two numbers
     *******************************************************************************/
    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    /******************************************************************************
     insert generated value
     *******************************************************************************/
    (function() {
        $('.progress-bar').each(function() {
            var value = randomIntFromInterval(0, 100);

            $(this).css('width', value + '%');
        });
    })();

    /******************************************************************************
     star rating
     *******************************************************************************/
    var __slice = [].slice;

    (function($, window) {
        var Starrr;

        Starrr = (function() {
            Starrr.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, value) {}
            };

            function Starrr($el, options) {
                var i, _, _ref,
                    _this = this;

                this.options = $.extend({}, this.defaults, options);
                this.$el = $el;
                _ref = this.defaults;
                for (i in _ref) {
                    _ = _ref[i];
                    if (this.$el.data(i) != null) {
                        this.options[i] = this.$el.data(i);
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on('mouseover.starrr', 'i', function(e) {
                    return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
                });
                this.$el.on('mouseout.starrr', function() {
                    return _this.syncRating();
                });
                this.$el.on('click.starrr', 'i', function(e) {
                    return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
                });
                this.$el.on('starrr:change', this.options.change);
            }

            Starrr.prototype.createStars = function() {
                var _i, _ref, _results;

                _results = [];
                for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                    _results.push(this.$el.append("<i class='fa fa-star-o fa-2x'></i>"));
                }
                return _results;
            };

            Starrr.prototype.setRating = function(rating) {
                if (this.options.rating === rating) {
                    rating = void 0;
                }
                this.options.rating = rating;
                this.syncRating();
                return this.$el.trigger('starrr:change', rating);
            };

            Starrr.prototype.syncRating = function(rating) {
                var i, _i, _j, _ref;

                rating || (rating = this.options.rating);
                if (rating) {
                    for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                        this.$el.find('i').eq(i).removeClass('fa-star-o').addClass('fa-star');
                    }
                }
                if (rating && rating < 5) {
                    for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                        this.$el.find('i').eq(i).removeClass('fa-star').addClass('fa-star-o');
                    }
                }
                if (!rating) {
                    return this.$el.find('i').removeClass('fa-star').addClass('fa-star-o');
                }
            };

            return Starrr;

        })();
        return $.fn.extend({
            starrr: function() {
                var args, option;

                option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var data;

                    data = $(this).data('star-rating');
                    if (!data) {
                        $(this).data('star-rating', (data = new Starrr($(this), option)));
                    }
                    if (typeof option === 'string') {
                        return data[option].apply(data, args);
                    }
                });
            }
        });
    })(window.jQuery, window);

    $('.starrr').starrr();

    $('#stars').on('starrr:change', function(e, value) {
        $('#count').html(value);
    });

    $('#stars-existing').on('starrr:change', function(e, value){
        $('#count-existing').html(value);
    });

    /******************************************************************************
     grid view trigger
     *******************************************************************************/
    function listView() {
        var $container  = $('.masonry')
            , isEnabled = $container.hasClass('active');

        $('.box').removeClass('col-lg-3 col-md-6').addClass('col-xs-12');
        $('.text-center').removeClass('text-center').addClass('text-left');

        $('.first-column').addClass('col col-sm-2').find('img').attr('width', '150px');
        $('.second-column').addClass('col col-sm-7');
        $('.third-column').addClass('col col-sm-3');

        if (isEnabled) {
            $container.masonry('destroy').removeClass('active');
        }
    }

    function gridView() {
        $('.box').removeClass('col-xs-12').addClass('col-lg-3 col-md-6');
        $('.text-left').removeClass('text-left').addClass('text-center');

        $('.first-column').removeClass('col col-sm-2').find('img').attr('width', '300px');
        $('.second-column').removeClass('col col-sm-7');
        $('.third-column').removeClass('col col-sm-3');

        $('.masonry').masonry().addClass('active');
    }

    (function() {
        var trigger         = $('.view-trigger').find('a')
            , $container    = $('.masonry')
            , hash          = location.hash;

        if (hash == '#list') {
            $container.removeClass('active');
            $('.fa-list').addClass('active');
            
            listView();
        } else {
            $('.fa-th').addClass('active');

            gridView();
        }

        trigger.on('click', function() {
            var flag = $(this).hasClass('fa-list');

            trigger.removeClass('active');
            $(this).addClass('active');

            if (flag) {
                location.hash = '#list';

                listView();
            } else {
                location.hash = '#grid';

                gridView();
            }
        });
    })();

    /******************************************************************************
     masonry grid
     *******************************************************************************/
    (function() {
        var $container  = $('.masonry')
            , isEnabled = $container.hasClass('active');

        if (isEnabled) {
            $container.imagesLoaded(function () {
                $container.masonry({
                    itemSelector: '.box',
                    columnWidth: '.box',
                    isAnimated: true,
                    transitionDuration: 0
                });
            });
        }
    })();
});