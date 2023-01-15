<div class="language-change-container @if(!empty($style_mode)){{ $style_mode }}@endif">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-language"></i></div>
                    </div>
                    <select name="change_localization" class="form-control" id="changeLocalization">
                        <option value="en" @if(Session::has('locale') && Session::get('locale') == 'en') selected="selected" @endif>English</option>
                        <option value="ben" @if(Session::has('locale') && Session::get('locale') == 'ben') selected="selected" @endif>বাংলা</option>
                        <option value="hin" @if(Session::has('locale') && Session::get('locale') == 'hin') selected="selected" @endif>हिंदी</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>