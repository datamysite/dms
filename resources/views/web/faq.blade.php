@extends('web.includes.master')

@section('addStyle')
  
  <link rel="preload" as="style" href="{{URL::to('/public')}}/assets/css/home-faq.css">
  <link href="{{URL::to('/public')}}/assets/css/home-faq.css" rel="stylesheet">

@endsection
@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="faq-section service-cards section">

	      <div class="container">

	        <div class="row gy-4 first-row">
	          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">

                  <div class="container">

                      <div class="faq-layout">

                        <!-- LEFT NAV -->
                        <nav class="faq-nav" aria-label="FAQ Categories">
                          <p class="nav-label">Browse by topic</p>
                          <button class="nav-btn active" data-cat="all">
                            <span class="nav-dot"></span> All Questions
                            <span class="nav-count">25</span>
                          </button>
                          <div class="nav-sep"></div>
                          <button class="nav-btn" data-cat="cat-1">
                            <span class="nav-dot"></span> Budgets & Pricing
                            <span class="nav-count">4</span>
                          </button>
                          <button class="nav-btn" data-cat="cat-2">
                            <span class="nav-dot"></span> Process & Timelines
                            <span class="nav-count">4</span>
                          </button>
                          <button class="nav-btn" data-cat="cat-3">
                            <span class="nav-dot"></span> ROI & Measuring Results
                            <span class="nav-count">4</span>
                          </button>
                          <button class="nav-btn" data-cat="cat-4">
                            <span class="nav-dot"></span> UAE Market & Regulations
                            <span class="nav-count">5</span>
                          </button>
                          <button class="nav-btn" data-cat="cat-5">
                            <span class="nav-dot"></span> Audience Targeting
                            <span class="nav-count">4</span>
                          </button>
                          <button class="nav-btn" data-cat="cat-6">
                            <span class="nav-dot"></span> Creative & Production
                            <span class="nav-count">4</span>
                          </button>
                          <div class="sidebar-cta">
                            <h4>Still have a question?</h4>
                            <p>Talk to our Dubai advertising experts — free, no commitment.</p>
                            <a href="https://api.whatsapp.com/send/?phone=971525287259" target="_blank">WhatsApp Us Now →</a>
                          </div>
                        </nav>

                        <!-- DIVIDER -->
                        <div class="faq-rule"></div>

                        <!-- CONTENT -->
                        <div class="faq-content">

                          <!-- Search -->
                          <div class="faq-search">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <input type="text" id="faqSearch" placeholder="Search any question…" autocomplete="off">
                            <button class="s-clear" id="sClear" aria-label="Clear">×</button>
                          </div>

                          <div class="faq-empty" id="faqEmpty">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <h4>No results found</h4>
                            <p>Try a different keyword or pick a category on the left.</p>
                          </div>

                          <div id="faqContainer">

                            <!-- ── GENERAL ── -->
                            <div class="faq-group" data-group="cat-1">
                              <div class="group-label">Budgets & Pricing</div>

                              <div class="faq-item" data-cat="cat-1" >
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">01</span><span class="q-text">How much does outdoor advertising cost in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Outdoor advertising costs in Dubai vary widely depending on the format, location, and duration. A single standard billboard can range from AED 5,000 to AED 80,000+ per month, while a high-profile Sheikh Zayed Road unipole or full building wrap in a premium location can reach significantly higher. DataMySite works with clients across all budget levels — from targeted lamp post campaigns for smaller brands to full-scale multi-format OOH packages for major product launches — and provides transparent cost breakdowns during the free strategy call. </div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-1">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">02</span><span class="q-text">What is a realistic advertising budget for a campaign in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">A realistic starting budget depends on the channels used and the scope of reach required. For a localised digital or influencer campaign, AED 10,000–30,000 per month can deliver measurable results. For multi-channel campaigns involving outdoor, digital, and transit media, budgets typically start from AED 50,000 and scale upward. DataMySite advises clients on the most cost-efficient allocation for their specific objectives, ensuring every dirham works as hard as possible regardless of budget size.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-1">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">03</span><span class="q-text">Is advertising in Dubai affordable for small businesses, or only for large corporations?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Dubai's advertising market is accessible at many price points. Small businesses can run effective campaigns using flyer distribution, lamp post banners, elevator screen advertising, nano and micro influencer campaigns, and targeted DOOH placements — all of which offer strong reach without enterprise-level budgets. DataMySite works with startups, SMEs, and large corporations alike, tailoring campaigns to available budgets while maximising impact and audience reach in the UAE market.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-1">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">04</span><span class="q-text">Are there hidden costs in outdoor advertising campaigns that I should be aware of?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Common additional costs include creative production and artwork fees, permit and municipality approval fees, printing and installation costs, and removal or replacement charges at campaign end. Some agencies quote media space costs alone and add these separately. DataMySite provides all-inclusive campaign proposals upfront — covering media buying, creative production, permits, installation, and reporting — so clients have complete cost clarity before committing.</div></div>
                              </div>
                            </div>

                            <!-- ── OUTDOOR ── -->
                            <div class="faq-group" data-group="cat-2">
                              <div class="group-label">Campaign Process & Timelines</div>

                              <div class="faq-item" data-cat="cat-2">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">05</span><span class="q-text">How long does it take to launch an advertising campaign in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Timelines vary by channel. A digital or social media campaign can typically go live within 3–7 days. Influencer campaigns usually require 2–4 weeks for sourcing, briefing, and content production. Outdoor advertising (billboards, building wraps, transit media) typically requires 2–6 weeks depending on permit approvals, production, and installation scheduling. DataMySite manages the full timeline for each campaign, keeping clients informed at every stage and working to the fastest possible turnaround without compromising quality.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-2">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">06</span><span class="q-text">What information do I need to provide to start an advertising campaign?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">To kick off a campaign, an agency typically needs your campaign objective (awareness, leads, sales, event promotion), target audience profile (demographics, location, interests), preferred channels and any specific placements, brand guidelines or existing creative assets, budget range, and campaign duration. DataMySite's onboarding process guides clients through each of these during the initial strategy call, so even businesses without a formal marketing brief can get started quickly and confidently.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-2">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">07</span><span class="q-text">Do I need to have my artwork and creative ready before booking advertising space in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">No — you do not need to have finished creative before booking. It is often more efficient to confirm the advertising formats and dimensions first, then produce artwork tailored to those exact specifications. DataMySite has an in-house creative team that can produce all required advertising artwork, from standard billboard graphics to CGI and anamorphic content, ensuring creative meets both brand standards and the technical requirements of each placement.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-2">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">08</span><span class="q-text">Can I run a short-term or one-month advertising campaign in Dubai, or are long-term contracts required?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Many advertising formats in Dubai can be booked on short-term bases, including monthly DOOH screen placements, elevator advertising, and flyer distribution campaigns. Some formats like prime billboard locations or metro station takeovers may require minimum booking periods. DataMySite structures campaigns flexibly to suit client needs — whether a one-month product launch push, a seasonal promotional campaign, or an ongoing annual brand presence — and advises on the minimum durations that deliver meaningful results for each format.</div></div>
                              </div>

                            </div>

                            <!-- ── DIGITAL & DOOH ── -->
                            <div class="faq-group" data-group="cat-3">
                              <div class="group-label">ROI & Measuring Results</div>


                              <div class="faq-item" data-cat="cat-3">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">09</span><span class="q-text">How do you measure the effectiveness of outdoor advertising campaigns?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Outdoor advertising effectiveness is measured through impression data (estimated daily views based on traffic counts and footfall), brand recall and awareness surveys, uplift in website traffic or search volume during the campaign period, QR code scans or unique URLs on creative, and sales or lead volume correlation. For DOOH campaigns, precise play counts and screen-level reporting are available. DataMySite provides post-campaign reports for all media formats, helping clients understand the real-world impact of their outdoor investment.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-3">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">10</span><span class="q-text">Which advertising format delivers the best return on investment (ROI) in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">ROI varies by business type, campaign goal, and audience. Performance-based formats like cost-per-lead (CPL) digital campaigns typically deliver the most trackable ROI for direct response objectives. For brand building, DOOH and metro advertising offer strong reach-per-dirham ratios. Influencer marketing consistently outperforms traditional formats for engagement and trust. DataMySite recommends the highest-ROI mix for each client based on sector, objective, and budget — often combining multiple formats to balance reach, engagement, and measurable conversion.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-3">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">11</span><span class="q-text">How long does it typically take to see results from an advertising campaign in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Digital campaigns can generate results within days. Influencer campaigns typically see engagement within 24–72 hours of posting. Outdoor and transit media build awareness over weeks, with brand recall and recognition effects compounding over the full campaign duration. PR placements can generate web traffic and backlink value within days of publication. DataMySite sets realistic expectations for each format during campaign planning and tracks progress throughout, adjusting tactics if needed to optimise mid-campaign performance.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-3">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">12</span><span class="q-text">What key performance indicators (KPIs) should I set for an advertising campaign in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">The right KPIs depend on your campaign objective. For awareness: impressions, reach, share of voice, and brand recall lift. For engagement: click-through rates, social interactions, influencer engagement rates, and video views. For conversion: leads generated, cost per lead, website enquiries, and sales uplift. For PR campaigns: media placements, domain authority of coverage, and website referral traffic. DataMySite helps clients define the right KPI framework before each campaign and reports against them at regular intervals throughout.</div></div>
                              </div>

                            </div>

                            <!-- ── TRANSIT ── -->
                            <div class="faq-group" data-group="cat-4">
                              <div class="group-label">UAE Market & Advertising Regulations</div>

                              <div class="faq-item" data-cat="cat-4">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">13</span><span class="q-text">Are there rules and regulations for outdoor advertising in Dubai that advertisers must follow?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Yes — outdoor advertising in Dubai is regulated by the Roads and Transport Authority (RTA) and Dubai Municipality. All outdoor advertising installations require permits, and creative content must comply with UAE content standards, which prohibit certain imagery, language, and topics related to religion, politics, or culturally sensitive subjects. DataMySite manages all permit applications, regulatory approvals, and creative compliance checks on behalf of clients, ensuring campaigns launch without delays or rejections.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-4">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">14</span><span class="q-text">How does advertising in the UAE during Ramadan differ from the rest of the year?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Ramadan is one of the highest-engagement advertising periods in the UAE, with audiences spending significantly more time on television, streaming platforms, social media, and outdoors during evening hours. However, advertising content must be respectful of the holy month — avoiding messages related to food and drink during daylight hours in certain contexts, and aligning with themes of family, generosity, and community. DataMySite helps brands develop Ramadan-specific advertising strategies that are culturally sensitive, high-impact, and compliant with UAE norms.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-4">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">15</span><span class="q-text">Do international brands need a local partner or UAE trade licence to advertise in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">International brands advertising in the UAE typically need to work through a locally registered entity or a licensed media buying agency to place advertising with UAE media owners and publishers. Some digital platforms (Google, Meta, TikTok) can be accessed directly from abroad, but for outdoor, transit, radio, and print media, a local entity or agency relationship is required. DataMySite acts as the local advertising partner for international brands entering the UAE market, handling all local media relationships, approvals, and regulatory requirements on their behalf.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-4">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">16</span><span class="q-text">What content restrictions apply to advertising in the UAE and what should brands avoid?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">UAE advertising standards prohibit content that is sexually suggestive or explicit, disrespectful of Islamic values or other religions, politically sensitive, promotes gambling or alcohol (in most contexts), or uses misleading claims. Comparative advertising that directly names competitors is also heavily restricted. Creative featuring human figures must adhere to modesty standards. DataMySite's creative team is fully versed in UAE National Media Council (NMC) standards and reviews all campaign content before submission, ensuring approvals are obtained smoothly.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-4">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">17</span><span class="q-text">What is the best advertising strategy for a new business launching in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">A new business launching in Dubai should prioritise building awareness first through a combination of high-visibility OOH formats (billboards, lamp posts), social media marketing, and influencer campaigns to build credibility quickly. DataMySite recommends a phased approach: awareness in month one using outdoor and social to build recognition, engagement in month two with influencer and PR activity to build trust, and conversion-focused campaigns from month three onward once a brand foundation is established in the market.</div></div>
                              </div>
                            </div>

                            <!-- ── INFLUENCER & CELEBRITY ── -->
                            <div class="faq-group" data-group="cat-5">
                              <div class="group-label">Audience Targeting in the UAE</div>

                              <div class="faq-item" data-cat="cat-5">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">18</span><span class="q-text">How can advertisers target specific nationalities or demographics in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Dubai's multicultural population makes audience targeting both essential and achievable. Digital channels (social media, OTT, programmatic DOOH) allow precise demographic, interest, and language-based targeting. Traditional channels can be targeted by geography (placing ads in areas with high concentrations of specific nationalities), language (Arabic, English, Hindi/Urdu radio or print), or context (Bollywood celebrity endorsements for South Asian audiences). DataMySite builds audience-segmented campaign plans, mapping each channel to the specific demographic groups it reaches most effectively in the UAE.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-5">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">19</span><span class="q-text">What is the best way to reach tourists and visitors in Dubai through advertising?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Tourists and visitors in Dubai are best reached through airport advertising (arrivals, duty-free, baggage areas), hotel lobby and room digital screens, taxi advertising (especially airport taxis), DOOH screens in tourist districts like Downtown Dubai, Jumeirah, and Dubai Marina, and in-flight advertising on airlines flying into Dubai. DataMySite has strong relationships with media owners across all tourist-facing formats in Dubai, allowing brands to create coordinated campaigns that reach visitors from the moment they land.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-5">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">20</span><span class="q-text">How do I reach high-income or luxury consumers through advertising in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">High-net-worth and luxury consumers in the UAE are best reached through premium OOH locations (Sheikh Zayed Road, DIFC, Palm Jumeirah, Dubai Marina), hotel lobby screens in five-star properties, business class in-flight advertising on Emirates and Etihad, and editorial PR coverage in Forbes Middle East. Macro influencers in luxury lifestyle niches also carry strong weight with this audience. DataMySite has established access to all of these premium media environments and regularly runs luxury brand campaigns in fashion, real estate, automotive, and hospitality.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-5">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">21</span><span class="q-text">Can advertising campaigns in Dubai effectively reach B2B (business-to-business) audiences?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Yes — the UAE has one of the world's highest concentrations of business decision-makers per capita. Effective B2B advertising formats include LinkedIn and programmatic digital advertising targeted by job title and company size, advertising in business publications and Forbes Middle East, event sponsorships at industry conferences, DIFC and Business Bay area OOH placements, and business-class airline advertising. DataMySite builds B2B advertising strategies that combine digital precision targeting with high-credibility traditional formats to build brand authority among professional and corporate decision-makers in the UAE.</div></div>
                              </div>
                            </div>

                            <!-- ── PR, EVENTS & SPONSORSHIPS ── -->
                            <div class="faq-group" data-group="cat-6">
                              <div class="group-label">Creative & Production</div>

                              <div class="faq-item" data-cat="cat-6">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">22</span><span class="q-text">What makes an effective outdoor advertising creative in Dubai?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Effective outdoor creative in Dubai needs to communicate a clear message in under three seconds, since most viewers are passing at speed. Key principles include: a single strong visual or message (not multiple claims), bold contrast and legibility at distance, minimal text (no more than seven words for highway formats), and a clear brand identity. In Dubai's competitive visual landscape, creative that is bold, unexpected, or emotionally resonant significantly outperforms safe or generic designs. DataMySite's creative team produces outdoor advertising artwork with these principles at their core.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-6">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">23</span><span class="q-text">What is CGI advertising and why is it becoming popular in the UAE and globally?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">CGI (Computer-Generated Imagery) advertising creates hyper-realistic or surreal visual effects that appear to exist in the real world — such as a giant product emerging from a billboard or a car driving through a city street as a 3D hologram. These formats, particularly anamorphic billboard content, go viral on social media because they appear physically impossible. In Dubai, where brands compete intensely for attention, CGI advertising delivers earned media impressions worth many times the production investment. DataMySite produces CGI advertising content specifically engineered for social virality and maximum brand impact.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-6">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">24</span><span class="q-text">Do I need to produce Arabic creative for advertising campaigns in the UAE?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">For some formats and locations, Arabic creative is either required or strongly recommended. Outdoor advertising near government buildings or in traditionally Arabic neighbourhoods, as well as Arabic radio and print placements, requires Arabic language content. For general consumer campaigns targeting the full UAE population, bilingual creative (English and Arabic) significantly increases reach and cultural resonance. DataMySite provides Arabic copywriting, translation, and creative adaptation services, ensuring campaigns communicate authentically to both Arabic-speaking and English-speaking audiences.</div></div>
                              </div>

                              <div class="faq-item" data-cat="cat-6">
                                <button class="faq-q" aria-expanded="false"><div class="faq-q-inner"><span class="q-num">25</span><span class="q-text">How does experiential marketing differ from traditional advertising, and when should a brand choose it?</span></div><div class="faq-tog"><span></span><span></span></div></button>
                                <div class="faq-ans"><div class="faq-ans-inner">Traditional advertising communicates a message to an audience passively. Experiential marketing invites consumers to actively participate in a brand experience — creating emotional memories, social media sharing moments, and word-of-mouth conversations that no passive format can replicate. Experiential works best for new product launches, brand repositioning, reaching younger demographics, and any campaign where the goal is deep engagement rather than broad awareness. DataMySite designs and executes experiential marketing activations across Dubai including mall pop-ups, TopGolf sponsorships, hot air balloon stunts, and Tesla wraps.</div></div>
                              </div>
                            </div>
                          </div><!-- /faqContainer -->

                        </div><!-- /faq-content -->
                      </div><!-- /faq-layout -->

                  </div>

	          </div>
	        </div>

	      </div>

	    </section>


	</main>


@endsection
@section('addScript')
  
  <script src="{{URL::to('/public')}}/assets/js/home-faq.js" defer></script>

@endsection