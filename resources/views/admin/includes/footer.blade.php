<footer class='footer clear-top mt-auto'>
            <small>© 2020 by<a target="_blank" href="https://github.com/LariMoro20/"> Larissa Moro </a>All rights reserved.</small>
        </footer>
<script>
    let token='<?= csrf_token() ?>';
$('.btnremoveuser').on( 'click', function (e) { 
        e.preventDefault();
        var element = $(this);
        let id=element.attr('iduser');
        $.confirm({
            title: 'Remover item!',
            content: 'Deseja realmente deletar este usuario?',
            buttons: {
                Sim: function () {
                $.ajax({
                        type: "POST",
                        url: "<?= route('users.delete'); ?>",
                        data: {id:id, _token: token },
                        success: function(msg){
                        element.closest('tr').remove();
                        }
                    });
                },
                cancelar: function () {},
            }
        });
    });

    $( ".datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });

    $('.btnremoveproj').on( 'click', function (e) { 
        e.preventDefault();
        var element = $(this);
        let ide=element.attr('idproj');
        $.confirm({
            title: 'Remover item!',
            content: 'Deseja realmente deletar este projeto?',
            buttons: {
                Sim: function () {
                $.ajax({
                        type: "POST",
                        url: "<?= route('projeto.delete'); ?>",
                        data: {id:ide, _token: token },
                        success: function(msg){
                        element.closest('tr').remove();
                        }
                    });
                },
                cancelar: function () {},
            }
        });
    });
    
</script>
</body>

</html>
