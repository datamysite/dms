<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
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
                                 'Sensual service',
                                 'Private entertainment',
                                 'Adult service',
                                 'Fake passport',
                                 'Visa assistance',
                                 'Immigration help',
                                 'Lottery win',
                                 'Social media verification',
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
                                'Work visa sponsorship',
                                'Quick loan',
                                'Instant cash',
                                'No credit check loan',
                                'Business loan',
                                'Fast approval loan',
                                'Payday loan',
                                'Loan without documents',
                                'Loan for unemployed',
                                'Crypto lending',
                                'Banking assistance',
                                'Dropshipping supplier',
                                'Import/export inquiry',
                                'Cheap wholesale supply',
                                'Resell opportunity',
                                'Brand collaboration',
                                'Sponsored post',
                                'Influencer marketing request',
                                'Instagram growth service',
                                'Paid promotion',
                                'Free trial offer',
                                'Domain selling',
                                'Guest post opportunity',
                                'Buy website traffic',
                                'Send bulk SMS',
                                'SEO backlinking request',
                                'Social media verification badge',
                                'Telegram marketing service',
                                'How do I advertise for free?',
                                'Link exchange request',
                                'Guest blogging opportunity',
                                'SEO backlink request',
                                'Bulk email marketing request',
                                'Free website listing',
                                'Submit a press release',
                                'Telegram promotion',
                                'WhatsApp bulk messaging',
                                'SMS marketing software',
                                'Website development offer',
                                'Cheap WordPress design',
                                'Free website audit',
                                'Mobile app development',
                                'Software development service',
                                'AI chatbot integration',
                                'Plugin installation request',
                                'Hosting migration service',
                                'Fix your website issues',
                                'Malware removal service',
                                'Buy Instagram followers',
                                'Get verified on social media',
                                'Unlock my Facebook account',
                                'TikTok growth hack',
                                'Google Maps ranking service',
                                'Business listing on Yellow Pages',
                                'Domain selling request',
                                'Logo design service',
                                'Graphic design for cheap',
                                'Free email list',
                            ];

                foreach ($keywords as $keyword) {
                    if (stripos($value, $keyword) !== false) {
                        $fail("The description contains a restricted keyword: $keyword");
                    }
                }
            }],
        ];
    }
}
