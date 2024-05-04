<!-- Mensagem de sucesso -->
@if (Session::has('alerta_sucesso'))
<script>
    Swal.fire({
   
        text: "{!!Session::get('alerta_sucesso')!!}",
        position: 'center',
        icon: 'success',
        showConfirmButton: true,
       
})
</script>

@endif
<!-- Mensagem de sucesso -->


<!-- Alerta de erros -->
    @if (Session::has('alerta_erro'))
    <script>
        Swal.fire({
    
            position: 'center',
            icon: 'warning',
            text: "{!!Session::get('alerta_erro')!!}",        
            showConfirmButton: true,
        
    })
    </script>

    @endif


