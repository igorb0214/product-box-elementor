

$(document).ready(function(){

    let $modal = $("#modalId");


    /**
     * box's button clicked
     */
    $(document).on('click', ".js-product-button", (event) => {

        const productBoxId = event.target.getAttribute("data-product_box_id");

        $.ajax({
            type: 'GET',
            url: '/service.php',
            data: {product_box_id: productBoxId, action: "getDescription"},
            success: (data) => {

                //show box's description
                $modal.find(".js-popup-content").html(data['description']);

            }
        });

        //show modal
        $modal[0].style.display = "block";
    });

    /**
     * close popup
     */
    $modal.on('click', ".js-close-popup", ()=> {
        $modal[0].style.display = "none";
    });

    /**
     * close popup when the click anywhere outside of the popup
     */
    $(document).on('click', (event) => {

        if (event.target == $modal[0]) {
            $modal[0].style.display = "none";
        }
    });

});
