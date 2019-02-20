<!DOCTYPE html>
<html>
<head>
    <title>Multiple HTML color gradient generator</title>

    <meta charset="utf-8">
    <meta name="description" content="Multi color gradient generator, easily generate nice color gradient in hexadecimal, for HTML and CSS content.">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="src/colorpicker.css">



    <style>
        #main .out {
            width: 100%;
            height: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        #main .out.css {
            margin-bottom: 0;
        }

        #main .out div {
            flex-grow: 1;
            position: relative;
        }

        #main .out div:after {
            content: attr(title);
            position: absolute;
            bottom: -15px;
            font-family: monospace;
            font-size: 12px;
        }


        textarea {
            height: 100px;
        }
    </style>
</head>

<body>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Multiple HTML color gradient generator</h1>
        <p class="lead text-muted">
            This tool generate a list of color hexadecimal codes to make a gradient in an HTML page or any other stuff. You can specify any number of color stops and up to 512 steps in the gradient.<br>
        </p>

    </div>
</section>

<div class="container" id="main">


    <div class="container">

        <div class="row">
            <div class="col-sm">
                <form id="formColors" >
                    <div class="form-group">
                        <legend>Color Stops</legend>
                        <div class="col-sm" id="colColors">
                            <div class="form-group row">
                                <label for="colors" class="col-sm-2 col-form-label">Select color</label>
                                <div class="col-4"><input type="text" name="colors[]" class="color form-control" value="FFFFFF"    aria-describedby="color" placeholder="Select color"></div>
                                <div class="col"> <a href="#" style="display:none;" class="deleteColor" title="Delete color"><img src="src/delete.png" style="vertical-align:baseline;"></a></div>
                            </div>
                            <div class="form-group row">
                                <label for="colors" class="col-sm-2 col-form-label">Select color</label>
                                <div class="col-4"><input type="text" name="colors[]" class="color form-control" value="000000"  class="form-control"  aria-describedby="color" placeholder="Select color"></div>
                                <div class="col"> <a href="#" style="display:none;" class="deleteColor" title="Delete color"><img src="src/delete.png" style="vertical-align:baseline;"></a></div>
                           </div>
                            <div class="form-group row">
                                <button class="btn btn-primary"  id="addColor"><img src="src/add.png"> Add a color</button>
                            </div>
                        </div>


                        <div class="col-sm">
                                <div class="form-group row">
                                    <label for="steps" class="col-sm-2 col-form-label">Steps</label>
                                    <div class="col-4"><input type="text" name="steps" value="9" class="form-control" placeholder="Steps" aria-describedby="color"></div>
                               </div>

                            <div class="form-group row">
                                <label for="steps" class="col-sm-2 col-form-label">Darker</label>
                                <div class="col-4">
                                    <select  name="darker"  class="form-control" aria-describedby="color">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="60">60</option>
                                        <option value="65">65</option>
                                        <option value="70">70</option>
                                        <option value="75">75</option>
                                        <option value="80">80</option>
                                        <option value="85">85</option>
                                        <option value="90">90</option>
                                        <option value="95">95</option>
                                    </select>
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="steps" class="col-sm-2 col-form-label">Brighter</label>
                                    <div class="col-4">
                                        <select  name="brighter"  class="form-control" aria-describedby="color">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            <option value="80">80</option>
                                            <option value="85">85</option>
                                            <option value="90">90</option>
                                            <option value="95">95</option>

                                        </select>
                                    </div>
                                </div>




                        </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <button type="button" name="generate" value="Generate gradient" class="btn btn-success" id="submitFormColors">Generate gradient</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>



<!--
        <fieldset>
           PHP array : <br>
            <textarea cols="80">$gradient = array("FFFFFF","DFDFDF","BFBFBF","9F9F9F","7F7F7F","5F5F5F","3F3F3F","1F1F1F","000000");</textarea><br>
            Inline :<br>
            <textarea cols="80">#FFFFFF #DFDFDF #BFBFBF #9F9F9F #7F7F7F #5F5F5F #3F3F3F #1F1F1F #000000</textarea><br>
            JS :<br>
            <textarea cols="80">var gradient = ["#FFFFFF", "#DFDFDF", "#BFBFBF", "#9F9F9F", "#7F7F7F", "#5F5F5F", "#3F3F3F", "#1F1F1F", "#000000"]</textarea>
        </fieldset>
-->



<div id="output"></div>


</div>



<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/tinycolor2@1.4.1/tinycolor.min.js"></script>
<script src="src/browser.js"></script>

<script src="src/colorpicker.min.js"></script>

<script>

//https://github.com/bgrins/TinyColor/blob/master/README.md#methods


    function reload() {
        $("a.deleteColor").click(function() {
            $(this).parents().eq(1).hide(200)
                .promise().done(function(){
                $(this).remove();
                reload()
            });

            return false;
        });

        if ($("div").length <= 2) {
            $("a.deleteColor").fadeOut(100);
        } else {
            $("a.deleteColor").fadeIn(100);
        }

        $(".color").ColorPicker({
            eventName: "focus",
          //  onSubmit: function(hsb, hex, rgb, el) { $(el).val(hex); $(el).ColorPickerHide(); },
            onChange: function(hsb, hex, rgb, el) {  $(el).val(hex); },
            onBeforeShow: function () { $(this).ColorPickerSetColor(this.value); }
        }).bind("keyup", function(){ $(this).ColorPickerSetColor(this.value); });
    }

    reload();

    $("#addColor").click(function(event){
        event.preventDefault();
        $("ul").append('<li style="display:none;height:25px;">'+
            '<input type="text" name="colors[]" class="color" value=""> '+
            '<a href="#" class="deleteColor" title="Delete color"><img src="src/delete.png" style="vertical-align:baseline;"></a>'+
            '</li>');

        $("#colColors").append('<div class="form-group row">'+
            '<label for="colors" class="col-sm-2 col-form-label">Select color</label>'+
            '<div class="col-4"><input type="text" name="colors[]" class="color form-control" value="000000"  class="form-control"  aria-describedby="color" placeholder="Select color"></div>'+
            '<div class="col"> <a href="#" style="display:none;" class="deleteColor" title="Delete color"><img src="src/delete.png" style="vertical-align:baseline;"></a></div>'+
            '</div>');

        reload();

        $("#colColors .row:last-child")
            .show(200).delay(400)
            .promise().done(function() {
            $(this).children("input").focus();
        });

        return false;
    });

    $("textarea").focus(function() {
        $(this).select();
    });







    function addGradient(colors, steps,darker,brighter) {
        var positions = [0, 0.25, 0.5, 0.75, 1];
        var grad = tinygradient(colors);
        var html = '<div class="card mb-4"><ul class="list-group list-group-flush">';

        // CSS
        html += '<li class="list-group-item"><h4>CSS reference</h4>';
        html += '<div class="out css" style="background:' + grad.css() + ';"></div>';
        html += '</li>';

        // RGB
        html += '<li class="list-group-item"><h4>RGB interpolation</h4>';
        html += '<div class="out rgb">';
        grad.rgb(steps).forEach(function(color) {
            html += '<div style="background:' + color.toRgbString() + ';" title="' + color.toHexString() + '"></div>';
        });

        html += '</div></li>';

        html += '<textarea cols="80">';
        grad.rgb(steps).forEach(function(color) {
            html +=  color.toHexString() + ' ';
        });
        html += '</textarea><br>';


        //RGB +10% DARKEN
        html += '<li class="list-group-item"><h4>RGB DARKEN</h4>';
        html += '<div class="out rgb">';
        grad.rgb(steps).forEach(function(color) {
            html += '<div style="background:' + color.darken(darker).toHexString() + ';" title="' + color.darken(darker).toHexString() + '"></div>';
        });
        html += '</div></li>';

        html += '<textarea cols="80">';
        grad.rgb(steps).forEach(function(color) {
            html +=  color.darken(darker).toHexString() + ' ';
        });
        html += '</textarea><br>';

        //RGB +10 LIGHTEN
        html += '<li class="list-group-item"><h4>RGB BRIGHTEN</h4>';
        html += '<div class="out rgb">';
        grad.rgb(steps).forEach(function(color) {
            html += '<div style="background:' + color.brighten(brighter).toHexString() + ';" title="' + color.brighten(brighter).toHexString() + '"></div>';
        });
        html += '</div></li>';

        html += '<textarea cols="80">';
        grad.rgb(steps).forEach(function(color) {
            html +=  color.brighten(brighter).toHexString() + ' ';
        });
        html += '</textarea><br>';
 /*
        // HSV
        html += '<li class="list-group-item"><h4>HSV short interpolation</h4>';
        html += '<div class="out hsv">';
        grad.hsv(steps, 'short').forEach(function(color) {
            html += '<div style="background:' + color.toRgbString() + ';" title="' + color.toHexString() + '"></div>';
        });
        html += '</div></li>';
*/

        /*
        // HSV2
        html += '<li class="list-group-item"><h4>HSV long interpolation</h4>';
        html += '<div class="out hsv2">';
        grad.hsv(steps, 'long').forEach(function(color) {
            html += '<div style="background:' + color.toRgbString() + ';" title="' + color.toHexString() + '"></div>';
        });
        html += '</div></li>';
*/

        /*
        // AT (RGB)
        html += '<li class="list-group-item"><h4>AT (RGB)</h4>';
        html += '<div class="out">';
        positions.forEach(function(pos) {
            var color = grad.rgbAt(pos);
            html += '<div style="background:' + color.toRgbString() + ';" title="' + (pos*100) + '% : ' + color.toHexString() + '"></div>';
        });
        html += '</div></li>';
*/

        // AT (HSV)
        /*
        html += '<li class="list-group-item"><h4>AT (HSV)</h4>';
        html += '<div class="out">';
        positions.forEach(function(pos) {
            var color = grad.hsvAt(pos);
            html += '<div style="background:' + color.toRgbString() + ';" title="' + (pos*100) + '% : ' + color.toHexString() + '"></div>';
        });
        html += '</div></li>';

        */

        html += '</div></div>';

        $('#output').html(html);
    }

    //addExample(['#00E5BC', '#BF0022'], 9);
    //addExample(['red', 'blue', 'green', 'gold'], 15);

        /*
        addExample([
        { color: '#d8e0de', pos: 0 },
        { color: '#255B53', pos: 0.8 },
        { color: '#000000', pos: 1 }
    ], 12);
    addExample(['white', 'black'], 10);
*/

        $("#formColors").click(function(event){
            console.log("goddamn was here.");
            event.preventDefault();
            var colors = [];
            $('input[name^="colors"]').each(function() {
                 colors.push($(this).val());
            });

            var steps = $("input[name='steps']",this).val();
            var darker = $("select[name='darker']",this).val();
            var brighter = $("select[name='brighter']",this).val();
            console.log('colors : ' + colors);
            console.log('darker : ' + darker + ' brighter '+ brighter);
            addGradient(colors,steps,darker,brighter);

            reload();
        });







</script>

</body>
</html>
