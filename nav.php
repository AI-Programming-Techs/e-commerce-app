<div class="nav">
    <h2 class="Cname">Eco cart</h2>
    <input id="searchinput" type="text">
    <button id="btn-x">x</button>
    <i class="fa fa-search" id="search" aria-hidden="true"></i>
    <i class="fa fa-search" id="search1" aria-hidden="true"></i>
    <i class="fa fa-heart" id="heart"  aria-hidden="true"></i>
    <i id="shop" class="fa fa-cart-plus" aria-hidden="true"></i>
    <i class="fa fa-user" id="user" aria-hidden="true"></i>
</div>
<script>
$("#search").click(function(){
    $("#searchinput").show();
    $(".Cname").hide();
    $("#heart").hide();
    $("#shop").hide();
    $("#btn-x").show();
    $("#search").hide();
    $("#user").hide();
});
$("#btn-x").click(function(){
    $("#searchinput").hide();
    $(".Cname").show();
    $("#heart").show();
    $("#shop").show();
    $("#btn-x").hide();
    $("#user").show();
    $("#search").show();

});
</script>