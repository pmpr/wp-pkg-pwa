<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639213c237642             |
    |_______________________________________|
*/
 namespace Pmpr\Module\PWA; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class PWA extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\120\127\x41", PR__MDL__PWA); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto qiaqsassksqiuyae; } parent::__construct(); $this->iemaakgqgqosiecm(); qiaqsassksqiuyae: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\151\156\x69\x74"]); } public function iemaakgqgqosiecm() { Asset::symcgieuakksimmu(); } public function init() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto qogqewiwmwiwskgm; } $this->ymyikakmsiykecwm(); $this->sqosmsaoceaoaega(); qogqewiwmwiwskgm: } public function sqosmsaoceaoaega() { $seqwakakqouygcqy = ManipulateServer::cmaecekuqkwmemms("\x41\x42\123\120\x41\x54\x48"); if (!$seqwakakqouygcqy) { goto qwigomakwmyiwkgo; } $esaqeawoigqgagum = untrailingslashit($seqwakakqouygcqy) . self::ekuyygygyuwsouiq; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { goto qgoiooayqmqqsiok; } $gmigwwwmwemyaayy = ManipulateServer::gmigwwwmwemyaayy(); $wqsieqeicmecakqk = $this->iuygowkemiiwqmiw("\163\167\x2e\152\x73", ["\143\x61\x63\x68\145\x5f\x6e\141\155\x65" => $this->akuociswqmoigkas() . "\x2d" . self::megoekiemouaquwk, "\163\x74\141\x72\x74\137\x70\141\x67\x65" => $gmigwwwmwemyaayy, "\157\146\x66\154\151\156\x65\x5f\x70\x61\147\145" => $gmigwwwmwemyaayy]); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($seqwakakqouygcqy, self::ekuyygygyuwsouiq, $wqsieqeicmecakqk); qgoiooayqmqqsiok: qwigomakwmyiwkgo: } public function ymyikakmsiykecwm() { $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms("\x41\102\x53\120\x41\124\x48"); $qogsmwakwacwqogk = $this->asckusockwoccusa(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca) && !$iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk))) { goto myoicgcuugciueis; } $oeomqqoymoecyuuu = Setting::symcgieuakksimmu(); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); $qeqooyuoiasweuck = array_filter($qeqooyuoiasweuck); $uiewakwqscemywuo = ManipulateFormat::omaawkkwwyesqwcc($qeqooyuoiasweuck, ["\144\x69\162" => Setting::cisaaayecwugcqiu, "\x6c\x61\156\147" => DecoratorI18N::iyouigcsiacgwksc(), "\x6e\141\155\x65" => get_bloginfo("\x6e\141\x6d\145"), "\x64\151\x73\160\154\x61\171" => "\163\164\x61\156\144\141\x6c\x6f\156\145", "\x73\x68\x6f\x72\164\137\156\141\155\145" => get_bloginfo("\156\141\155\145"), "\x74\150\x65\x6d\145\x5f\143\x6f\x6c\157\x72" => "\43\106\106\x46", "\x6f\x72\x69\145\156\x74\141\x74\151\157\x6e" => Setting::scsqckmsqgmscsqc, "\x64\145\x73\x63\x72\151\x70\164\x69\x6f\x6e" => get_bloginfo("\x64\145\163\143\162\151\x70\164\151\157\x6e"), "\x62\141\x63\x6b\x67\x72\157\x75\156\144\x5f\143\x6f\x6c\157\x72" => "\x23\x46\x46\106"]); $uiewakwqscemywuo = array_merge($uiewakwqscemywuo, ["\x73\x63\157\160\145" => "\x2e", "\x69\x63\157\x6e\x73" => $oeomqqoymoecyuuu->kwagkemgawuoacwy(), "\163\164\141\x72\164\x5f\x75\162\154" => "\56\57", "\143\141\x74\145\147\x6f\162\x69\145\163" => $oeomqqoymoecyuuu->mesakkycomyuuwwm()]); ManipulateArray::unset($uiewakwqscemywuo, ["\154\151\143\x65\x6e\163\x65\x5f\153\145\171"]); $uiewakwqscemywuo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\x61\156\151\x66\145\163\x74\137\x63\157\156\146\151\147\165\162\141\x74\x69\157\156"), $uiewakwqscemywuo); $iiaumsgauuyeqksw->mikiwoyomouecayw($mkomwsiykqigmqca, $qogsmwakwacwqogk, $uiewakwqscemywuo); myoicgcuugciueis: } }
