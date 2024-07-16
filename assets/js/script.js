;(function($){
    function download_or_print_pdf( stream_type ){
        window.html2canvas = html2canvas
        domtoimage.toPng($('.evw_invoice_content_container')[0],{
            width: $('.evw_invoice_content_container')[0].clientWidth * 3,
            height: $('.evw_invoice_content_container')[0].clientHeight * 3,
            style: {
                transform: 'scale(3)',
                transformOrigin: 'top left'
            }
        }).then(canvas => {
            var doc = new jspdf.jsPDF({
                orientation: "potrait",
                unit: "in",
                format: 'A4',
                compress: true
            });
            // if( window.innerWidth <= 425 ) {
            //     doc.addImage(canvas, 'PNG', -0.5, -0.25, 11.95, 8.55, '' , 'FAST' );
            // }else{
                doc.addImage(canvas, 'PNG', 0, 0, 8.3, 11.7, '', 'FAST' );
            // }
            if( stream_type == "print" ) {
                const blob = doc.output("bloburl")
                window.open(blob)
            } else {
                doc.save("download.pdf");
            }
        })
    }
    $(document).on('click','.evw_download_btn',function(){
        download_or_print_pdf('download')
    })
    $(document).on('click','.evw_print_btn',function(){
        download_or_print_pdf('print')
    })
})(jQuery)