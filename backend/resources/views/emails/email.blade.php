@component('mail::message')
    # Temos Bolinhos

    ### Está saindo uma fornada quentinha 🙂

    @forelse($cakes ?? '' as $cake)
        {{$cake->name}} [ R$ {{$cake->price}} | {{$cake->weight}} | {{$cake->quantity}} ] <br />
    @endforelse

    ### Obrigado,

@endcomponent
