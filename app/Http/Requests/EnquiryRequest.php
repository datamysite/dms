<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'email' => 'required|email:rfc,dns',
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'phone' => ['required', 'regex:/^\+[0-9]{7,14}$/'],
            'service' => 'required',
            'description' => ['required', 'string', function ($attribute, $value, $fail) {

                $keywords = [
                                'CV', 
                                'Resume', 
                                'Job application',
                                 'Employment request',
                                 'Work visa',
                                 'Internship',
                                 'Career opportunity',
                                 'Cover letter',
                                 'Hiring inquiry',

                                 'Loan',
                                 'Mortgage',
                                 'Credit',
                                 'Salary advance',
                                 'Debt consolidation',
                                 'Personal loan',
                                 'Home loan',
                                 'Car loan',
                                 'Finance reques',

                                 'Escort',
                                 'Massage service',
                                 'Companion',
                                 'Call girl',
                                 'Call girls',
                                 'girl',
                                 'girls',
                                 'Sensual service',
                                 'Private entertainment',
                                 'Adult service',

                                 'Fake passport',
                                 'Visa assistance',
                                 'Immigration',
                                 'Lottery',
                                 'Social media',

                                 'Promotion request',
                                 'Apply for a job',
                                'Career opportunity',
                                'Fresh graduate',
                                'HR department',
                                'Recruitment request',
                                'Open positions',
                                'Work from home',
                                'Part-time job',
                                'Full-time job',
                                'Work visa',

                                'loan',
                                'loans',
                                'Crypto lending',
                                'Banking assistance',

                                'Dropshipping supplier',
                                'Import/export inquiry',
                                'Cheap wholesale supply',
                                'Resell opportunity',
                                'Brand collaboration',
                                'Sponsored post',
                                'Instagram growth service',
                                'Paid promotion',
                                'Free trial offer',

                                'Domain selling',
                                'Guest post',
                                'website traffic',
                                'Send bulk SMS',
                                'SEO backlinking',
                                'verification badge',
                                'Telegram',

                                'free',
                                'Link exchange',
                                'Guest blogging',
                                'backlink request',
                                'website listing',
                                'software',

                                'Website development',
                                'WordPress design',
                                'website audit',
                                'app development',
                                'development service',
                                'AI chatbot',
                                'Plugin installation',
                                'migration service',
                                'website issues',
                                'Malware',

                                'Instagram likes',
                                'Get verified',
                                'Facebook account',
                                'TikTok growth',
                                'Google Maps',
                                'Business listing',
                                'Domain selling',
                                'Logo design',
                                'Graphic design',
                                'Free email',
                            ];

                foreach ($keywords as $keyword) {
                    $val = explode(' ', $keyword);
                    if(count($val) > 1){
                        $chk = 0;
                        foreach($val as $v){
                            if (stripos($value, $v) !== false) {
                                $chk++;
                            } 
                        }
                        if ($chk == count($val)) {
                            $fail("The description contains a restricted keyword: $keyword");
                        }
                    }else{
                        if (stripos($value, $keyword) !== false) {
                            $fail("The description contains a restricted keyword: $keyword");
                        }
                    }
                }
            }],
        ];
    }
}
