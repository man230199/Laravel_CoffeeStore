$(document).ready(function () {
    // $('#datetimepicker').datetimepicker();
    // $('#start_date').val('01/01/2022');
  //  $("#dropzone" ).sortable();
    
    //NESTABLE
    let categoryNestable = $("#category_nestable");
    let outputNestable = $("#outputNestable");
    categoryNestable.nestable({}).on("change", function () {
        let sendData = categoryNestable.nestable("serialize");
        outputNestable.val(
            JSON.stringify(categoryNestable.nestable("serialize"))
        );
        $.ajax({
            type: "POST",
            url: categoryNestable.data("url"),
            data: {
                data: sendData,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
            },
        });
    });
    //END NESTABLE

    let $btnSearch = $("button#btn-search");
    let $btnClearSearch = $("button#btn-clear-search");

    let $inputSearchField = $('input[name="search_field"]');
    let $inputSearchValue = $('input[name="search_value"]');
    let $selectChangeAttr = $('select[name="select_change_attr"]');

    $("a.select-field").click(function (e) {
        e.preventDefault();

        let field = $(this).data("field");
        let fieldName = $(this).html();
        $("button.btn-active-field").html(
            fieldName + ' <span class="caret"></span>'
        );
        $inputSearchField.val(field);
    });

    $btnSearch.click(function () {
        var pathname = window.location.pathname;
        let params = ["filter_status"];
        let searchParams = new URLSearchParams(window.location.search); // ?filter_status=active

        let link = "";
        $.each(params, function (key, param) {
            // filter_status
            if (searchParams.has(param)) {
                link += param + "=" + searchParams.get(param) + "&"; // filter_status=active
            }
        });

        let search_field = $inputSearchField.val();
        let search_value = $inputSearchValue.val();

        if (search_value.replace(/\s/g, "") == "") {
            alert("Nhập vào giá trị cần tìm !!");
        } else {
            window.location.href =
                pathname +
                "?" +
                link +
                "search_field=" +
                search_field +
                "&search_value=" +
                search_value;
        }
    });

    $btnClearSearch.click(function () {
        var pathname = window.location.pathname;
        let searchParams = new URLSearchParams(window.location.search);

        params = ["filter_status"];

        let link = "";
        $.each(params, function (key, param) {
            if (searchParams.has(param)) {
                link += param + "=" + searchParams.get(param) + "&";
            }
        });

        window.location.href = pathname + "?" + link.slice(0, -1);
    });

    $(".btn-delete").on("click", function () {
        if (!confirm("Bạn có chắc muốn xóa phần tử?")) return false;
    });

    $(".status-ajax").on("click", function () {
        let url = $(this).data("url");
        let btn = $(this);
        let currentClass = btn.data("class");
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function (response) {
                btn.removeClass(currentClass);
                btn.addClass(response.statusObj.class);
                btn.html(response.statusObj.name);
                btn.data("url", response.link);
                btn.data("class", response.statusObj.class);
                btn.notify("Cập nhật thành công", {
                    position: "top center",
                    className: "success",
                });
            },
        });
    });

    $(".is-home-ajax").on("click", function () {
        let url = $(this).data("url");
        let btn = $(this);
        let currentClass = btn.data("class");
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function (response) {
                btn.removeClass(currentClass);
                btn.addClass(response.isHomeObj.class);
                btn.html(response.isHomeObj.name);
                btn.data("url", response.link);
                btn.data("class", response.isHomeObj.class);
                btn.notify("Cập nhật thành công", {
                    position: "top center",
                    className: "success",
                });
            },
        });
    });

    $selectChangeAttr.on("change", function () {
        let ele = $(this);
        let selectValue = $(this).val();
        let url = $(this).data("url");
        url = url.replace("value_new", selectValue);
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function (response) {
                ele.notify("Cập nhật thành công", {
                    position: "top center",
                    className: "success",
                });
            },
        });
    });

    $('select[name="filter_selectbox"]').on("change", function () {

        let selectValue = $(this).val();
        let url = $(this).data("url");

        url = url.replace("value_new", selectValue);
        window.location.href = url;
    });
});

//Preview Image
$('input[name="thumb"]').on("change", function (event) {
    console.log(123);
    var output = document.getElementsByClassName("zvn-thumb");
    output.src = URL.createObjectURL(event.target.files[0]);
});


function randomString(length) {
    var result = "";
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(
            Math.floor(Math.random() * charactersLength)
        );
    }
    return result;
}

$('#generate').on('click', function() {
    let random_string = randomString(6);
    let code = $('#code').val();
    let new_code =  $('#code').val().replace(code, random_string);
    $('#code').val(new_code);
});

CKEDITOR.replace("content", {
    filebrowserImageBrowseUrl: "/laravel-filemanager?type=Images",
    filebrowserImageUploadUrl:
        "/laravel-filemanager/upload?type=Images&_token=",
    filebrowserUploadMethod: "form",
});

var route_prefix = "filemanager";
$("#lfm").filemanager("image", { prefix: route_prefix });
$("#images").filemanager("image", { prefix: route_prefix });


