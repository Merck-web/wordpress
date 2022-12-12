<?php
$posts = get_posts(array(
    'post_type' => 'slider_about_zoo',
    'numberposts' => -1,
));
?>

<div class="wrap">
    <div class="fone"></div>
    <div class="input_box">
        <div class="title">Donate for your animal</div>
        <div class="inputs">
            <div class="input">
                <p class="label">Сhoose an animal</p>
                <select class="form-select shadow-none" aria-label="Default select example">
                    <option selected></option>
                    <?php
                    foreach ($posts as $key => $value):
                        ?>
                        <option value="<?php echo $key ?>">
                            <?php echo $value->title; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input">
                <p class="label">To donate</p>
                <div class="input-group">
                    <input id="aboutPopupDonate" type="text" class="form-control shadow-none" aria-label="money"
                           aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="input_col">
                <div style="width: 100%" class="about_you">
                    <p class="title-section">About you</p>
                    <div class="input">
                        <p class="label">Name</p>
                        <div class="input-group">
                            <input type="text" class="form-control shadow-none" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input">
                        <p class="label">Email</p>
                        <div class="input-group">
                            <input type="text" class="form-control shadow-none" aria-label="mail"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input phone">
                        <p class="label">Phone</p>
                        <div id="inputPhone" class="input-group">
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option value="+7">+7</option>
                                <option value="+8">+8</option>
                            </select>
                            <input id="aboutPopupPhone" type="text" class="form-control shadow-none" aria-label="Phone"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="checkout">
                    <p class="title-section">Checkout</p>
                    <div class="input">
                        <p class="label">Card number</p>
                        <div class="input-group">
                            <input id="aboutCardPopup" type="text" class="form-control shadow-none" aria-label="mail"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input">
                        <p class="label">Expiry date</p>
                        <div id="date_separator" class="input-group">
                            <input id="startDate" type="text" class="form-control shadow-none" aria-label="date"
                                   aria-describedby="basic-addon1">
                            <input id="endDate" type="text" class="form-control shadow-none" aria-label="date"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input">
                        <p class="label">CVS</p>
                        <div class="input-group">
                            <input id="aboutPopupCVS" type="text" class="form-control shadow-none" aria-label="mail"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="modal_footer">
            <p>
                If don’t cancel your subscription before the trial ends on April 15, 2021, you agree that you will
                automatically be charged
            </p>
            <button>
                donate
            </button>
        </div>
    </div>
</div>


<script>
    const moneyMask = {
        mask: Number,
        min: 0,
        max: 10000000,
        // other options are optional with defaults below
        scale: 2,  // digits after point, 0 for integers
        signed: false,  // disallow negative
        thousandsSeparator: ' ',  // any single char
        padFractionalZeros: false,  // if true, then pads zeros at end to the length of scale
        normalizeZeros: true,  // appends or removes zeros at ends
        radix: '.',  // fractional delimiter
        mapToRadix: ['.'],  // symbols to process as radix
    };


    const donate = document.getElementById('aboutPopupDonate');
    const phone = document.getElementById('aboutPopupPhone');
    const card = document.getElementById('aboutCardPopup');
    const cvs = document.getElementById('aboutPopupCVS');

    IMask(donate, moneyMask);
    IMask(phone, {
        mask: '(000) 000-00-00'
    });
    IMask(card, {
        mask: '0000 0000 0000 0000'
    })
    IMask(cvs, {
        mask: '000'
    })


    datepicker(document.querySelector('#startDate'), {
        formatter: (input, date, instance) => {
            input.value = date.toLocaleDateString()
        }
    })
    datepicker(document.querySelector('#endDate'), {
        formatter: (input, date, instance) => {
            input.value = date.toLocaleDateString()
        }
    })


</script>