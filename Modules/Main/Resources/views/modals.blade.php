<div class="modals">
    <div class="modal fade" id="feedbackModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form class='feedbackForm' id='feedbackForm' action='{{ route('feedback') }}' method='post' name='feedbackForm'>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Напишите нам</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class='col-12 mb-3'>
                            <label for='name'>Ваше имя</label>
                            <input type='text' id="name" name='name' class="mb-3" style="width: 100%" placeholder='Ваше имя'>

                            <div style="font-size: 14px" class='name error text-danger d-flex justify-content-end'></div>
                            <div class='col-12'>
                                <label for='message'class="col-12">Сообщение</label>
                                <textarea name='message' id="message" class="" style="width: 100%; min-height: 200px" placeholder='Сообщение'></textarea>
                                <div style="font-size: 14px" class='message error text-danger d-flex justify-content-end'></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <input type="submit" class="btn btn-neon-pink sbmt" value='Отправить'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

