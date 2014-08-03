window.addEventListener("load", function () {
    var Q = window.Q = Quintus({
        development: true,
        imagePath: CORE_URL + 'img/games/game01/',
        dataPath: CORE_URL + 'data/'
    })
        .include('Scenes, Sprites, 2D, Input, Touch, UI, TMX, Audio')
        .setup({
            width: 320,
            height: 180,
            scaleToFit: true
        }).controls().touch();

    Q.setImageSmoothing(false);

    // Define Scene
    Q.scene("level", function (stage) {
        Q.stageTMX('Map.tmx', stage);
    });

    // Load assets
    Q.loadTMX('Map.tmx', function () {
        Q.stageScene("level");
    });

});