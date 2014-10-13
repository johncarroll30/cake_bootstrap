// Simple State Manager Header
ssm.addStates([
{
    id: 'medium-footer',
    minWidth: 768,
    maxWidth: 1279,
    onEnter: function(){
        requirejs(['backstretch'], function(backstretch) {
             requirejs(['medium']);
        });
    }
},
{
    id: 'large-footer',
    minWidth: 1280,
    onEnter: function(){
        requirejs(['backstretch'], function(backstretch) {
             requirejs(['medium']);
        });
    }
}
]);
ssm.ready();

if (!Modernizr.input.placeholder) {
    requirejs(['placeholders']);
}


