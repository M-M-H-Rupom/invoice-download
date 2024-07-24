;(function($){
    $('.evw_invoice_content_container').hide();
    function download_or_print_pdf( stream_type ){
        $.LoadingOverlay("show");
        $('.evw_invoice_content_container').show();
        domtoimage.toPng($('.evw_invoice_content_container')[0],{
            width: $('.evw_invoice_content_container')[0].clientWidth * 3.5,
            height: $('.evw_invoice_content_container')[0].clientHeight * 3.5,
            style: {
                transform: 'scale(3.5)',
                transformOrigin: 'top left'
            }
        }).then(canvas => {
            $('.evw_invoice_content_container').hide()
            var doc = new jspdf.jsPDF({
                orientation: "potrait",
                unit: "in",
                format: 'A4',
                // compress: true
            });
            // if( window.innerWidth <= 425 ) {
            //     doc.addImage(canvas, 'PNG', -0.5, -0.25, 11.95, 8.55, '' , 'FAST' );
            // }else{
                doc.addImage(canvas, 'PNG', -0.1, 0, 8.3, 11.7, '', 'FAST' );
            // }
            if( stream_type == "print" ) {
                const blob = doc.output("bloburl")
                window.open(blob)
            } else {
                doc.save("download.pdf");
            }
            
        })
        $.LoadingOverlay("hide")
    }
    $('.evw_download_print_btns .evw_download_btn').on('click',function(){
        download_or_print_pdf('download');
    })
})(jQuery)