<?php

namespace App\CaptchaSolver;

class CaptchaSolver
{
    protected string $captchaText = '';

    public function extractAndSaveImage(string $base64String, string $filePath = 'public/captchas/captcha.png'): self
    {
        $imageData = preg_replace('#^data:image/\w+;base64,#i', '', $base64String);
        file_put_contents($filePath, base64_decode($imageData));
        return $this;
    }

    public function executeTesseract(string $filePath = 'public/captchas/captcha.png', string $language = 'eng', string $psm = '8'): self
    {
        $cmd = "tesseract {$filePath} stdout -l {$language} --psm {$psm}";
        $this->captchaText = trim(shell_exec($cmd));
        return $this;
    }

    public function getCaptchaText(): string
    {
        return $this->captchaText;
    }
}
