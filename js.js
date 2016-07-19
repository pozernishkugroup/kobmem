
          /*.........КАНВАС ОТРИСОВКА........*/
        window.onload = function() {
        var canvas = document.getElementById("can");
        var context = canvas.getContext("2d");
        var cat = document.getElementById("img");
        context.drawImage(img, 0, 0, 510, 340);
                      /*******ТЕКСТ КОHФИГ********/
function wrapText(context, text, marginLeft, marginTop, maxWidth, lineHeight){
  var words = text.split(" ");
  var countWords = words.length;
  var line = "";
  for (var n = 0; n < countWords; n++) {
      var testLine = line + words[n] + " ";
      var testWidth = context.measureText(testLine).width;
      if (testWidth > maxWidth) {
          context.strokeText(line, marginLeft, marginTop);
          context.fillText(line, marginLeft, marginTop);
          line = words[n] + " ";
          marginTop += lineHeight;
        }else {
          line = testLine;
        }
      }
        context.strokeText(line, marginLeft, marginTop);
        context.fillText(line, marginLeft, marginTop);
    }
  var maxWidth = 470; //размер поле, где выводится текст
  var lineHeight = 32;
                      /*.........ТЕКСТ..1........*/
        document.getElementById("mytext1").onkeyup = function() {pic()};
        function pic() {
        var cat = document.getElementById("img");
        context.drawImage(img, 0, 0, 510, 340);
        //var marginLeft = 20;
        var marginTop1 = 40;
        var marginTop2 = 300;
        var marginLeft = 245;
        context.font = "bold 32px sans-serif";
        context.textAlign = "center";
        context.fillStyle   = "white";                        
        context.strokeStyle = "#000";
        context.lineWidth   = 9;
        var text1 = txt2 = mytext1.value.toUpperCase();
        var text2 = txt2 = mytext2.value.toUpperCase();
        wrapText(context, text1, marginLeft, marginTop1, maxWidth, lineHeight);
        wrapText(context, text2, marginLeft, marginTop2, maxWidth, lineHeight);
        }; 
                      /*.........ТЕКСТ..2........*/
        document.getElementById("mytext2").onkeyup = function() {pic2()};
        function pic2() {
        var cat = document.getElementById("img");
        context.drawImage(img, 0, 0, 510, 340);
        var marginTop1 = 40;
        var marginTop2 = 300;
        var marginLeft = 245;
        context.font = "bold 32px sans-serif";
        context.textAlign = "center";
        context.fillStyle   = "white";                        
        context.strokeStyle = "#000";
        context.lineWidth   = 9;
        var text1 = mytext1.value.toUpperCase();
        var text2 = txt2 = mytext2.value.toUpperCase();
        wrapText(context, text1, marginLeft, marginTop1, maxWidth, lineHeight);
        wrapText(context, text2, marginLeft, marginTop2, maxWidth, lineHeight);
        };   
            
            };
        
             /*..........КАНВАС СОХРАНЕНИЕ НА СЕРВ.......*/
              function uploadEx() {
                var canvas = document.getElementById("can");
                var dataURL = canvas.toDataURL("image/jpeg");
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
 
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'saveCanv.php', true);
 
                xhr.upload.onprogress = function(e) {
                    if (e.lengthComputable) {
                        var percentComplete = (e.loaded / e.total) * 100;
                    }
                }; 
                xhr.onload = function() {};
                xhr.send(fd);
             };


