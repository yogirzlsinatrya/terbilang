<?php namespace Yogirzlsinatrya\Terbilang;

class Terbilang{

	public function greeting()
	{
		return "What up dawg";
	}
	
	public function test()
	{
		$hai="haiiii";
		return $hai;
	}
	
	public function rupiah($number)
    	{
        $number = str_replace('.', '', $number);
        if ( ! is_numeric($number)) throw new NotNumbersException;
        $base    = array('Nol', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan');
        $numeric = array('1000000000000000', '1000000000000', '1000000000000', 1000000000, 1000000, 1000, 100, 10, 1);
        $unit    = array('Kuadriliun', 'Triliun', 'Biliun', 'Milyar', 'Juta', 'Ribu', 'Ratus', 'Puluh', '');
        $str     = null;
        $i = 0;
        if ($number == 0)
        {
            $str = 'nol';
        }
        else
        {
            while ($number != 0)
            {
                $count = (int)($number / $numeric[$i]);
                if ($count >= 10)
                {
                    $str .= static::rupiah($count) . ' ' . $unit[$i] . ' ';
                }
                elseif ($count > 0 && $count < 10)
                {
                    $str .= $base[$count] . ' ' . $unit[$i] . ' ';
                }
                $number -= $numeric[$i] * $count;
                $i++;
            }
            $str = preg_replace('/Satu Puluh (\w+)/i', '\1 Belas', $str);
			$str = preg_replace('/Satu Ribu/', 'Seribu\1', $str);
			$str = preg_replace('/Satu Ratus/', 'Seratus\1', $str);
			$str = preg_replace('/Satu Puluh/', 'Sepuluh\1', $str);
            $str = preg_replace('/Satu Belas/', 'Sebelas\1', $str);
            $str = preg_replace('/\s{2,}/', ' ', trim($str));
        }
        return $str;
    }

}
