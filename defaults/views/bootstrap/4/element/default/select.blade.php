<div class="{{ $element->getClass('div', true) }}" id="{{ $element->getDivID() }}">
    {!! $element->drawLabel() !!}
    {!! $element->drawElement() !!}
    @if(!empty($element->getData('help')))
        <small>{!! $element->getData('help') !!}</small>
    @endif
</div>
