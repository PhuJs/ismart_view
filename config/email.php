<?php 
/**
 * ============ CẤU HÌNH EMAIL =========
 * Chứa các thông số cấu hình để gửi email
 * =====================================
 * portocal : Giao thức để gửi email
 * smtp_host: Host để gửi mail
 * smtp_port: Cổng để gửi mail
 * smtp_user: Tên email để gửi
 * smtp_pass: Mật khẩu email
 * mailType: Định dạng nội dung
 * chartset: Mã ký tự nội dung mail
 */

 $config['email'] = array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => '587',
    'smtp_user' => '',
    'smtp_pass' => '',
    'mailType' => 'html',
    'chartset' => 'UTF-8'
 );