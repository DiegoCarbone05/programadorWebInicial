$(() => {
    var sideBarStatus = false;
    $(".disclaimer")?.remove();

    const openCloseSidebar = ()=>{
        sideBarStatus = !sideBarStatus;

        if (sideBarStatus) {

          $("#backSideBar").removeClass("hiddenSidebar");
          $("#sideBarComponent").removeClass("showSidebar");
          $(".btn-phone").removeClass("hiddenSidebar");
          $("body").addClass("overflowHidden");

        } else {

          $("#backSideBar").addClass("hiddenSidebar");
          $("#sideBarComponent").addClass("showSidebar");
          $(".btn-phone").addClass("hiddenSidebar");
          $("body").removeClass("overflowHidden");
        }
    };

    $("#btn-sidebar").on("click",openCloseSidebar);
    $("#backSideBar").on("click",openCloseSidebar);



});