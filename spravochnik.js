
$('.open_close').click(function () {
   $('.registration_data').animate({
      height: "toggle"
   }, 1000)
   $('.registration_data').html('');
   var input = document.createElement("input")
   input.setAttribute("placeholder", "Ф-И-О*")
   input.setAttribute("class", "names")
   input.setAttribute("type", "text")
   registration.appendChild(input)
   var input_phone = document.createElement("input")
   input_phone.setAttribute("placeholder", "Телефон")
   input_phone.setAttribute("class", "phone")
   input_phone.setAttribute("type", "number")
   registration.appendChild(input_phone)
   var input_status = document.createElement("input")
   input_status.setAttribute("placeholder", "Кем приходится")
   input_status.setAttribute("class", "status")
   input_status.setAttribute("type", "text")
   registration.appendChild(input_status)
   var div_b = document.createElement("div")
   div_b.setAttribute("class", "register_button")
   div_b.setAttribute("id", "registerd")
   div_b.setAttribute("value", "add")
   registration.appendChild(div_b)
   const text = document.createTextNode("Добавить")
   var buuton = document.createElement("button")
   buuton.setAttribute("class", "info_saved")
   buuton.setAttribute("onclick", "saved()")
   buuton.appendChild(text)
   registerd.appendChild(buuton)

   var div_info = document.createElement("div")
   div_info.setAttribute("class", "chage_info")

   registration.appendChild(div_info);
})
$('.info_saved').click(function () {
   $('.registration_data').animate({
      height: "toggle"
   }, 1000)
})

$.post("spravochnik_oll_result.php", {
   purpose: ""
}, function (params) {
   $('.tablica_block').html(params)
})

function del(customer_id) {
   event.target.parentElement.parentElement.remove()
   $.post("delete_or_change.php", {
      purpose: 'delete_data',
      del_customer_data: customer_id
   })
}

function saved() {
   if (!($('.names').val()) || !($('.phone').val()) || !($('.status').val()
   )) {
      $('.chage_info').html('заполните поля')
   } else {
      $.post("creat_new_customer.php", {
         new_names: $('.names').val(),
         new_phone: $('.phone').val(),
         new_status: $('.status').val()
      }, function (params) {
         $('.chage_info').html(params)
      })
      $('.registration_data').animate({
         height: "toggle"
      }, 1000)
      function rest() {
         document.location.reload()
      }
      setTimeout(rest, 1000);
   }
}

function redact(customer_id) {
   $('.registration_data').animate({
      height: "toggle"
   }, 1000)
   $.post("redact.php", {
      customers_id: customer_id
   }, function (params) {
      $('.registration_data').html(params)
   })

}

function save_change(customer_id) {
   $.post("delete_or_change.php", {
      customers_id: customer_id,
      changed_names: $('.names').val(),
      changed_phone: $('.phone').val(),
      changed_status: $('.status').val()
   }, function (params) {
      $('.chage_info').html(params)
   })
   $('.registration_data').animate({
      height: "toggle"
   }, 1000)
   function rest() {
      document.location.reload()
   }
   setTimeout(rest, 1000);
}
function otmena() {
   $('.registration_data').animate({
      height: "toggle"
   }, 1000)
}