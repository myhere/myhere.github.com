(function(S) {
  var api = 'http://favorite.taobao.com/popup/add_collection.htm?id={itemId}&itemtype=1&scjjc=1&_tb_token_={token}&t={idx}';

  var itemIds = [
    '20664332897',
    '20686520258',
    '16197870906',
    '16292189796'
  ];

  var token = S.one('#J_TbToken').val();

  var t = +new Date;
  S.each(itemIds, function(itemid, idx) {
    url = 'http://favorite.taobao.com/popup/add_collection.htm?id=' + itemid + '&itemtype=1&scjjc=1&_tb_token_=' + token + '&t=' + idx;

    S.getScript(url);
  });
})(KISSY);
