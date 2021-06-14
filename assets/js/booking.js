// var slid1
// function validate1(val) {
//   v1 = document.getElementById("name");
//   v2 = document.getElementById("email");

//   flag1 = true;
//   flag2 = true;

//   if (val >= 1 || val == 0) {
//     if (v1.value == "") {
//       v1.style.borderColor = "red";
//       flag1 = false;
//     } else {
//       v1.style.borderColor = "white";
//       flag1 = true;
//     }
//   }

//   if (val >= 2 || val == 0) {
//     if (v2.value == "") {
//       v2.style.borderColor = "red";
//       flag2 = false;
//     } else {
//       v2.style.borderColor = "white";
//       flag2 = true;
//     }
//   }

//   flag = flag1 && flag2;

//   return flag;
// }

// function validate2(val) {
//   v1 = document.getElementById("web-title");
//   v2 = document.getElementById("desc");

//   flag1 = true;
//   flag2 = true;

//   if (val >= 1 || val == 0) {
//     if (v1.value == "") {
//       v1.style.borderColor = "red";
//       flag1 = false;
//     } else {
//       v1.style.borderColor = "white";
//       flag1 = true;
//     }
//   }

//   if (val >= 2 || val == 0) {
//     if (v2.value == "") {
//       v2.style.borderColor = "red";
//       flag2 = false;
//     } else {
//       v2.style.borderColor = "white";
//       flag2 = true;
//     }
//   }

//   flag = flag1 && flag2;

//   return flag;
// }

// $(document).ready(function () {
//   var current_fs, next_fs, previous_fs;

//   $(".next").click(function () {
//     str1 = "next1";
//     str2 = "next2";

//     if (!str1.localeCompare($(this).attr("id")) && validate1(0) == true) {
//       val1 = true;
//     } else {
//       val1 = false;
//     }

//     if (!str2.localeCompare($(this).attr("id")) && validate2(0) == true) {
//       val2 = true;
//     } else {
//       val2 = false;
//     }

//     if (
//       (!str1.localeCompare($(this).attr("id")) && val1 == true) ||
//       (!str2.localeCompare($(this).attr("id")) && val2 == true)
//     ) {
//       current_fs = $(this).parent().parent().parent();
//       next_fs = $(this).parent().parent().parent().next();

//       $(current_fs).removeClass("show");
//       $(next_fs).addClass("show");

//       $("#progressbar li").eq($(".card").index(next_fs)).addClass("active");

//       current_fs.animate(
//         {},
//         {
//           step: function () {
//             current_fs.css({
//               display: "none",
//               position: "relative",
//             });

//             next_fs.css({
//               display: "block",
//             });
//           },
//         }
//       );
//     }
//   });

//   $(".prev").click(function () {
//     current_fs = $(this).parent();
//     previous_fs = $(this).parent().prev();

//     $(current_fs).removeClass("show");
//     $(previous_fs).addClass("show");

//     $("#progressbar li").eq($(".card").index(next_fs)).removeClass("active");

//     current_fs.animate(
//       {},
//       {
//         step: function () {
//           current_fs.css({
//             display: "none",
//             position: "relative",
//           });

//           previous_fs.css({
//             display: "block",
//           });
//         },
//       }
//     );
//   });
// });

//how many people are coming section
jQuery(document).ready(function () {
  // This button will increment the value
  $('[data-quantity="plus"]').click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr("data-field");
    // Get its current value
    var currentVal = parseInt($("input[name=" + fieldName + "]").val());
    // If is not undefined
    if (!isNaN(currentVal)) {
      // Increment
      $("input[name=" + fieldName + "]").val(currentVal + 1);
    } else {
      // Otherwise put a 0 there
      $("input[name=" + fieldName + "]").val(0);
    }
  });
  // This button will decrement the value till 0
  $('[data-quantity="minus"]').click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr("data-field");
    // Get its current value
    var currentVal = parseInt($("input[name=" + fieldName + "]").val());
    // If it isn't undefined or its greater than 0
    if (!isNaN(currentVal) && currentVal > 0) {
      // Decrement one
      $("input[name=" + fieldName + "]").val(currentVal - 1);
    } else {
      // Otherwise put a 0 there
      $("input[name=" + fieldName + "]").val(0);
    }
  });
});
