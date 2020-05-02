<div class="section__content admin-section__container">
    <div class="general__buttons">
        @if($model->createLink != null)
            <div>
                <a class="cro__button cro__button--small" href="{{ $model->createLink->url }}">
                    {{ $model->createLink->text }}
                </a>
            </div>
        @endif
            @if($model->createLink != null)
                <div>
                    <a class="cro__button cro__button--small" href="{{ $model->sortLink->url }}">
                        {{ $model->sortLink->text }}
                    </a>
                </div>
            @endif
    </div>
    @if($model->crudTable->items != null && !empty($model->crudTable->items))

        <table class="items__table">
            <thead>
                <tr>
                    <th>
                        {{$model->crudTable->nameTitle}}
                    </th>
                    @if($model->crudTable->isEditingEnabled)
                        <th class="row-manage">
                            <i class="la la-edit" title="{{$model->crudTable->editTitle}}"></i>
                        </th>
                    @endif
                    @if($model->crudTable->isImagesEditingEnabled)
                        <th class="row-manage">
                            <i class="la la-image" title="{{$model->crudTable->imagesTitle}}"></i>
                        </th>
                    @endif
                    @if($model->crudTable->isDeletingEnabled)
                        <th class="row-manage">
                            <i class="la la-trash" title="{{$model->crudTable->deleteTitle}}"></i>
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($model->crudTable->items as $crudItem)
                    <tr>
                        <td class="text-ellipsis">{{$crudItem->name}}</td>
                        @if($model->crudTable->isEditingEnabled)
                            <td class="table__td-centered">
                                <a href="{{ $crudItem->editUrl }}">
                                    <i class="la la-edit" title="{{$crudItem->editText}}"></i>
                                </a>
                            </td>
                        @endif
                        @if($model->crudTable->isImagesEditingEnabled)
                            <td class="table__td-centered">
                                <a href="{{ $crudItem->imagesUrl }}">
                                    <i class="la la-image" title="{{$crudItem->imagesText}}"></i>
                                </a>
                            </td>
                        @endif
                        @if($model->crudTable->isDeletingEnabled)
                            <td class="table__td-centered">
                                @include('custom.form._delete', array('url' => $crudItem->deleteUrl,'text' => $crudItem->deleteText))
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>