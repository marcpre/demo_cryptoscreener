/* ------------------------------------------------------------------------------
 *
 *  # Ion Range Sliders
 *
 *  Demo JS code for extra_sliders_ion.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var IonSlider = function() {


    //
    // Setup module components
    //

    // ION range slider examples
    var _componentIonSlider = function() {
        if (!$().ionRangeSlider) {
            console.warn('Warning - ion_rangeslider.min.js is not loaded.');
            return;
        }

        // Basic range slider
        $('#ion-range').ionRangeSlider({
            type: 'double',
            min: 0,
            max: 1000,
            from: 200,
            to: 800
        });

        $('#market-cap-range-ion').ionRangeSlider({
            type: 'double',
            min: 0,
            max: 1000,
            from: 200,
            to: 800
        });

        $('#last-price-range-ion').ionRangeSlider({
            type: 'double',
            min: 0,
            max: 1000,
            from: 200,
            to: 800
        });

        $('#highest-price-range-ion').ionRangeSlider({
            type: 'double',
            min: 0,
            max: 1000,
            from: 200,
            to: 800
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentIonSlider();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    IonSlider.init();
});
