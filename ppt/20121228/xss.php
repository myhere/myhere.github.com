<style>
.tweet-box{
  border-color: #ccc;
  border-width: 1px;
  border-style: solid;
  -webkit-box-shadow: 1px 1px 1px 0px #eaeaea inset;
  -moz-box-shadow: 1px 1px 1px 0px #eaeaea inset;
  box-shadow: 1px 1px 1px 0px #eaeaea inset;
  height: 88px;
  width: 547px;
  position: relative;
  border-radius: 3px;
  margin: 15px 0 0;
  background-color: #fff;
}
.tweet-input{
  background: transparent;
  width: 547px;
  height: 75px;
  padding: 5px;
  font-family: "Tahoma", "SimSun";
  font-size: 14px;
  line-height: 18px;
  overflow-x: hidden;
  overflow-y: auto;
  word-wrap: break-word;
  outline: none;
  border: 0;
  margin: 1px 0 0;
  resize:none;
}
.marginTop10{
  margin-top:10px;
}
.xss-code{
  width:400px;
  height:40px;
}
</style>

<?php
$token = htmlspecialchars($__COOKIE['_tb_token_']);

// 绕过 tms 安全过滤
$tweet = $__GET['tweet'];
// echo $tweet;
$tweet = htmlspecialchars($tweet);
// echo $tweet;
$tweet = htmlspecialchars_decode($tweet);
// echo $tweet;
?>



<input type="hidden" value="<?=$token?>" id="J_TbToken" />


<h1>写点什么吧: </h1>
<form method="get" name="demo-form">
  <div class="tweet-box">
    <textarea class="tweet-input"  name="tweet"></textarea>
  </div>
  <button class="marginTop10" type="submit">submit</button>
</form>
<hr />

<h2 class="marginTop10">列表</h2>
<div>
<?php
echo $tweet;
?>
</div>

<h2 class="marginTop10">恶意代码</h2>
<textarea class="xss-code">
<script src=></script>
</textarea>
