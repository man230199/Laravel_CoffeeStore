@php
use App\Helpers\Template;
use App\Models\SettingModel;
$settingModel = new SettingModel();
$settingHomeImages = $settingModel::select('value')->where('key_value', 'setting-home-images')->get()->first()->toArray()['value'];
$thumb = Template::showItemBackground('setting', $settingHomeImages['story_image'], $settingHomeImages['story_image']);
@endphp
<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ $thumb }});">
    </div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Khám Phá</span>
                <h2 class="mb-4">Về Cửa Hàng</h2>
            </div>
            <div>
                <p>Từ tình yêu với Việt Nam và niềm đam mê cà phê, năm 1999, thương hiệu Blend Coffee® ra đời với khát vọng nâng tầm di sản cà phê lâu đời của Việt Nam và lan rộng tinh thần tự hào, kết nối hài hoà giữa truyền thống với hiện đại.</p>

                <p> Bắt đầu với sản phẩm cà phê đóng gói tại Hà Nội vào năm 2000, chúng tôi đã nhanh chóng phát triển và mở rộng thành thương hiệu quán cà phê nổi tiếng và không ngừng mở rộng hoạt động trong và ngoài nước từ năm 2002.</p>
                    
                <p> Qua một chặng đường dài, chúng tôi đã không ngừng mang đến những sản phẩm cà phê thơm ngon, sánh đượm trong không gian thoải mái và lịch sự. Những ly cà phê của chúng tôi không chỉ đơn thuần là thức uống quen thuộc mà còn mang trên mình một sứ mệnh văn hóa phản ánh một phần nếp sống hiện đại của người Việt Nam.</p>
                    
                <p>  Đến nay, Blend Coffee® vẫn duy trì khâu phân loại cà phê bằng tay để chọn ra từng hạt cà phê chất lượng nhất, rang mới mỗi ngày và phục vụ quý khách với nụ cười rạng rỡ trên môi. Bí quyết thành công của chúng tôi là đây: không gian quán tuyệt vời, sản phẩm tuyệt hảo và dịch vụ chu đáo với mức giá phù hợp.</p>
            </div>
        </div>
    </div>
</section>
