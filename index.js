var linebot = require('linebot');
var express = require('express');

var bot = linebot({
  channelId: '1525875951',
  channelSecret: 'e7d3d6bb9f69afa1eeaa625ed9530b98',
  channelAccessToken: 'f3Vg+J/EcLYaKSQ3vbCw8/S0h+ggTK2tFITtjqzfe/fx6v/pNbsCqHMWaW5+FkGqNwzDN++BVLK9kNPO0E7Mc4xHMeNOLZrfSYtGUWIjuLAx6UCbQjpW4OfZ5dPkkDx2AeEFHLef5InYP9pZzR6SagdB04t89/1O/w1cDnyilFU='
});

bot.on('message', function(event) {
  console.log(event); //把收到訊息的 event 印出來看看
});

const app = express();
const linebotParser = bot.parser();
app.post('/', linebotParser);

//因為 express 預設走 port 3000，而 heroku 上預設卻不是，要透過下列程式轉換
var server = app.listen(process.env.PORT || 8080, function() {
  var port = server.address().port;
  console.log("App now running on port", port);
});