$(document).ready(function(){
    category();
    brands();
    featured();
    product();
    cart_count();
    function category(){
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {categories:1},
            success :   function(data){
                $("#get_category").html(data);
            }
        })
    }
    function brands(){
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {brands:1},
            success :   function(data){
                $("#get_brands").html(data);
            }
        })
    }
    function featured(){
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {featured:1},
            success :   function(data){
                $("#featured").html(data);
            }
        })
    }
    function product(){
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {get_Product:1},
            success :   function(data){
                $("#getProduct").html(data);
            }
        })
    }
    $("body").delegate(".category","click",function(event){
        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {get_selected_category:1,cat_id:cid},
            success :   function(data){
                $("#getProduct").html(data);
            }
        })
    })
    $("body").delegate(".brand","click",function(event){
        event.preventDefault();
        var bid = $(this).attr('bid');
        var bc = $(this).attr('bc');
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {selectedBrand:1,brand_id:bid,brand_category:bc},
            success :   function(data){
                $("#getProduct").html(data);
            }
        })
    })
    $("#search_btn").click(function(){
        var keyword = $("#search").val();
        if(!keyword==""){
        $.ajax({
            url     :    "action.php",
            method  :    "POST",
            data    :    {search:1,keyword:keyword},
            success :   function(data){
                $("#getProduct").html(data);
            }
        })
      }
    })
    $("#signup_btn").click(function(event){
        event.preventDefault();
        $.ajax({
            url     :    "register.php",
            method  :    "POST",
            data    :    $("form").serialize(),
            success :   function(data){
                $("#signup_msg").html(data);
            }
        })
    })
    $("#new_Account").click(function(){
        window.location.href='registration.php';
    })
    $("#login").click(function(event){
        event.preventDefault();
        var email = $("#email").val();
        var pass = $("#password").val();
        $.ajax({
            url     :    "login.php",
            method  :    "POST",
            data    :    {userLogin:1,userEmail:email,userPassword:pass},
            success :   function(data){
                if(data == "Hello"){
                    window.location.href = "profile.php";
                }
            }
        })
    })
  $("body").delegate("#product","click",function(event){
      event.preventDefault();
      var p_id = $(this).attr('pid');
      $.ajax({
          url       :   "action.php",
          method    :   "POST",
          data      :   {addToCart:1,pId:p_id},
          success   :   function(data){
              $("#add").html(data);
              cart_count();
          }
      }) 
  })
  $("body").delegate("#pro_page","click",function(event){
    event.preventDefault();
    var p_id = $(this).attr('pid');
    $.ajax({
        url       :   "action.php",
        method    :   "POST",
        data      :   {addToCart:1,pId:p_id},
        success   :   function(data){
            $("#add").html(data);
            cart_count();
        }
    }) 
})
  cart_container();
  function cart_container(){
      $.ajax({
          url     :   "action.php",
          method  :   "POST",
          data    :   {get_Cart:1},
          success :   function(data){
              $("#cart_display").html(data);
          }
      })
  };
  function cart_count(){
      $.ajax({
          url     :   "action.php",
          method  :   "POST",
          data    :   {cart_count:1},
          success :   function(data){
              $(".badge").html(data);
          }
      })
  }
  $("#cart_container").click(function(event){
              window.location.href="cart.php";
    })
  cart_checkout();
  function cart_checkout(){
      $.ajax({
          url     :   "action.php",
          method  :   "POST",
          data    :   {cart_checkout:1},
          success :   function(data){
              $("#cart_checkout").html(data);
              cart_count();
          }
      })
  }
  $("body").delegate(".qty","keyup",function(){
    var pid =$(this).attr("pid");
    var qty = $("#qty-" + pid).val();
    var price = $("#price-" + pid).val();
    var total = qty * price;
    $("#total-" + pid).val(total);
})
$("body").delegate(".remove","click",function(event){
    event.preventDefault();
    var pid = $(this).attr("remove_id");
    $.ajax({
        url     :    "action.php",
        method  :    "POST",
        data    :   {removeFromCart:1,removeId:pid},
        success :   function(data){
            $("#cart_msg").html(data);
            cart_checkout();
        }
    })
})
$("body").delegate(".update","click",function(event){
    event.preventDefault();
    var pid   = $(this).attr("update_id");
    var qty   = $("#qty-" + pid).val();
    var price = $("#price-" + pid).val();
    var total = $("#total-" + pid).val();
    $.ajax({
        url     :   "action.php",
        method  :   "POST",
        data    :   {updateCart:1,updateId:pid,qty:qty,price:price,total:total},
        success :   function(data){
            $("#cart_msg").html(data);
            cart_checkout();
        }
    })
})
})