
// const prevBtns = $(".btn-prev");
// const nextBtns = $("");
// const progress = $("#progress");
// const formSteps = $(".divcon");
// const progressSteps = $(".progress-step");

// let progressStep = $(".progressbar").data("step");

// let formStepsNum = parseInt(progressStep);

// $(document).on("click", ".btn-next", function () {
//     formStepsNum++;
//     console.log(formStepsNum);
//     const personalForm = document.getElementById("empPersonalInfo");
//     const addressForm = document.getElementById("empAddressInfo");
//     const contactForm = document.getElementById("empContactInfo");
//     const orgposForm = document.getElementById("empOrgPosInfo");

//     // updateHeight();
//     if (formStepsNum == 1) {
//         // Get the form data
//         var formData = $("#empPersonalInfo").serializeArray();

//         $(".bar").removeClass("d-none");
//         $(".gray").removeClass("d-none");
//         setTimeout(function () {
//             dispFormdata(formData);
//             $(".bar").addClass("d-none");
//             $(".gray").addClass("d-none");
//             nextFunctions(formStepsNum);
//         }, 1000);
//     }
//     if (formStepsNum == 2) {
//         // Get the form data
//         var formData = $("#empAddressInfo").serializeArray();

//         $(".bar").removeClass("d-none");
//         $(".gray").removeClass("d-none");
//         setTimeout(function () {
//             dispFormdata(formData);
//             $(".bar").addClass("d-none");
//             $(".gray").addClass("d-none");
//             nextFunctions(formStepsNum);
//         }, 1000);
//     }
//     if (formStepsNum == 3) {
//         // Get the form data
//         var formData = $("#empContactInfo").serializeArray();

//         $(".bar").removeClass("d-none");
//         $(".gray").removeClass("d-none");
//         setTimeout(function () {
//             dispFormdata(formData);
//             $(".bar").addClass("d-none");
//             $(".gray").addClass("d-none");
//             nextFunctions(formStepsNum);
//         }, 1000);
//     }
// });

// function nextFunctions(step) {
//     if (step != 4) {
//         updtBtn(step);
//         nextBtn(step);
//         updateProgressbar();
//         $(".progressbar").attr("data-step", step);
//     }
// }
// // Display form values
// function dispFormdata(formData) {
//     formData.forEach(function (item) {
//         console.log("Name: " + item.name + ", Value: " + item.value);
//     });
// }
// prevBtns.on("click", function () {
//     if (formStepsNum != 0) {
//         formStepsNum--;
//         updtBtn(formStepsNum);
//         prevBtn(formStepsNum);
//         updateProgressbar();
//         $(".progressbar").attr("data-step", formStepsNum);
//     }
// });
// function prevBtn(step) {
//     formSteps.eq(step).addClass("current").removeClass("next");
//     formSteps
//         .eq(step + 1)
//         .addClass("next")
//         .removeClass("current");
// }
// function nextBtn(step) {
//     formSteps.removeClass("current");
//     formSteps.eq(step).addClass("current").removeClass("next");
// }

// function updateProgressbar() {
//     progressSteps.each(function (idx) {
//         if (idx < formStepsNum + 1) {
//             $(this).addClass("progress-step-active");
//         } else {
//             $(this).removeClass("progress-step-active");
//         }
//     });

//     const progressActive = $(".progress-step-active");
//     progress.width(
//         ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%"
//     );
//     progress.css("background-color", "#68bfa0");
// }
// function updtBtn(step) {
//     if (step > 0) {
//         $(".btn-prev").removeClass("d-none");
//     } else {
//         $(".btn-prev").addClass("d-none");
//     }

//     if (step == 3) {
//         $(".btn-next")
//             .removeClass(" color-info btn-next")
//             .addClass(" color-success submitEmployee")
//             .text("Submit New Employee");
//     } else {
//         $(".submitEmployee")
//             .addClass(" color-info btn-next")
//             .removeClass(" color-success submitEmployee")
//             .text("Next");
//     }
// }

// $(document).on("click", ".submitEmployee", function () {
//     // Get the form data
//     console.l;
//     var formData = $("#empOrgPosInfo").serializeArray();
//     dispFormdata(formData);
// });

// toastAlert("hi", "error", "error");

// function toastAlert(msg, icon, variant, header) {
//     customElements.whenDefined("pop-notify").then(() => {

//         function popNotify() {
//             return customElements.get("pop-notify");
//         }

//         popNotify().configure({
//             iconTransformer: (icon) => {
//                 return `<span class="material-symbols-outlined">${icon}</span>`;
//             },
//             placement: 'bottom-right'
//         });

//         const options = {
//             variant: variant,
//             icon: icon
//         };

//         if (header) {
//             options.header = header;
//         }

//         popNotify().notify(msg, options);
//     });
// }

{
  /* <div class="container profile-sidebar">
<div class="row d-flex  justify-content-center">
<div class="col-md-3 d-flex align-items-center justify-content-center">
  <i class="ri-user-line"></i>
</div>
<div class="col-md-9 d-flex align-items-center ">
  <div class=" fx-sb-title condense ">
  <!-- <span class="hover-title">Ruxe E. Pasok</span> -->
  <small class="hover-title ">Administrator</small>
  </div>
</div>
</div>
</div> */
}
// function updateHeight() {
//     var step = document.querySelector(".progressbar").getAttribute("data-step");

//     // Update CSS variable based on the step value
//     switch (step) {
//         case "1":
//             document.documentElement.style.setProperty(
//                 "--step1-height",
//                 "600px"
//             );
//             break;
//         case "2":
//             document.documentElement.style.setProperty(
//                 "--step2-height",
//                 "800px"
//             );
//             break;
//         // Add more cases for additional steps if needed
//     }
// }
