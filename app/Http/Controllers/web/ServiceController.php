<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Publications;
use App\Models\Blogs;

class ServiceController extends Controller
{

    public function outdoorAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '1')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.outdoor-advertising.index')->with($data);
    }
        public function outdoorAdvertisingAillboardsAdvertising(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
            $data['subservice'] = Services::where('slug', 'billboards-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '21')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.outdoor-advertising.billboards-advertising.index')->with($data);
        }
            public function outdoorAdvertisingAillboardsAdvertisingBuildingWraps(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'outdoor-advertising')->first();
                $data['service'] = Services::where('slug', 'billboards-advertising')->first();
                $data['subservice'] = Services::where('slug', 'building-wraps')->first();
                $data['blogs'] = Blogs::where('category_id', '21')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.outdoor-advertising.billboards-advertising.building-wraps')->with($data);
            }
            public function outdoorAdvertisingAillboardsAdvertisingHoarding(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'outdoor-advertising')->first();
                $data['service'] = Services::where('slug', 'billboards-advertising')->first();
                $data['subservice'] = Services::where('slug', 'hoarding')->first();
                $data['blogs'] = Blogs::where('category_id', '21')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.outdoor-advertising.billboards-advertising.hoarding')->with($data);
            }
            public function outdoorAdvertisingAillboardsAdvertisingWallscapes(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'outdoor-advertising')->first();
                $data['service'] = Services::where('slug', 'billboards-advertising')->first();
                $data['subservice'] = Services::where('slug', 'wallscapes')->first();
                $data['blogs'] = Blogs::where('category_id', '21')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.outdoor-advertising.billboards-advertising.wallscapes')->with($data);
            }
            public function outdoorAdvertisingAillboardsAdvertisingBridgePanels(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'outdoor-advertising')->first();
                $data['service'] = Services::where('slug', 'billboards-advertising')->first();
                $data['subservice'] = Services::where('slug', 'bridge-panels')->first();
                $data['blogs'] = Blogs::where('category_id', '21')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.outdoor-advertising.billboards-advertising.bridge-panels')->with($data);
            }

        public function outdoorAdvertisingFlyersDistribution(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
            $data['subservice'] = Services::where('slug', 'flyers-distribution')->first();
            $data['blogs'] = Blogs::where('category_id', '22')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.outdoor-advertising.flyers-distribution')->with($data);
        }
        public function outdoorAdvertisingHumanBillboards(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
            $data['subservice'] = Services::where('slug', 'human-billboards')->first();
            $data['blogs'] = Blogs::where('category_id', '1')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.outdoor-advertising.human-billboards')->with($data);
        }
        public function outdoorAdvertisingUnipoles(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
            $data['subservice'] = Services::where('slug', 'unipoles')->first();
            $data['blogs'] = Blogs::where('category_id', '1')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.outdoor-advertising.unipoles')->with($data);
        }
        public function outdoorAdvertisingLampPost(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
            $data['subservice'] = Services::where('slug', 'lamp-post')->first();
            $data['blogs'] = Blogs::where('category_id', '1')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.outdoor-advertising.lamp-post')->with($data);
        }


//-------------------------------------------------------------------------------------------------------
    public function digitalAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'digital-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.digital-advertising.index')->with($data);
    }
        public function digitalAdvertisingOTTAdvertising(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'digital-advertising')->first();
            $data['subservice'] = Services::where('slug', 'ott-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.digital-advertising.ott-advertising.index')->with($data);
        }
            public function digitalAdvertisingOTTAdvertisingNetflix(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'digital-advertising')->first();
                $data['service'] = Services::where('slug', 'ott-advertising')->first();
                $data['subservice'] = Services::where('slug', 'netflix-advertising')->first();
                $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.digital-advertising.ott-advertising.netflix-advertising')->with($data);
            }


        public function digitalAdvertisingDOOHAdvertising(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'digital-advertising')->first();
            $data['subservice'] = Services::where('slug', 'dooh-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.digital-advertising.dooh-advertising')->with($data);
        }
        public function digitalAdvertisingHotelAdvertising(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'digital-advertising')->first();
            $data['subservice'] = Services::where('slug', 'hotel-digital-screens-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.digital-advertising.hotel-digital-screens-advertising')->with($data);
        }
        public function digitalAdvertisingElevetorAdvertising(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'digital-advertising')->first();
            $data['subservice'] = Services::where('slug', 'elevator-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '2')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.digital-advertising.elevator-advertising')->with($data);
        }


//-------------------------------------------------------------------------------------------------------
    public function prCoverage(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['publications'] = Publications::all();
        $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services.public-relations-pr-coverage.index-new')->with($data);
    }
    public function prCoverageNew(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['publications'] = Publications::all();
        $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();
        $data['sub_footer'] = 'visible';
        
        return view('web.services.public-relations-pr-coverage.index-new')->with($data);
    }
        public function prCoverageGulfNews(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
            $data['subservice'] = Services::where('slug', 'gulf-news')->first();
            $data['publications'] = Publications::all();
            $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.public-relations-pr-coverage.gulf-news')->with($data);
        }
        public function prCoverageForbes(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
            $data['subservice'] = Services::where('slug', 'forbes')->first();
            $data['publications'] = Publications::all();
            $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();


            return view('web.services-new.public-relations-pr-coverage.forbes')->with($data);
        }
        public function prCoverageKhaleejTime(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
            $data['subservice'] = Services::where('slug', 'khaleej-time')->first();
            $data['publications'] = Publications::all();
            $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.public-relations-pr-coverage.khaleej-time')->with($data);
        }
        public function prCoverageArabianNews(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
            $data['subservice'] = Services::where('slug', 'arabian-news')->first();
            $data['publications'] = Publications::all();
            $data['blogs'] = Blogs::where('category_id', '6')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.public-relations-pr-coverage.arabian-news')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function celebrityMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'celebrity-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '7')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.celebrity-marketing.index')->with($data);
    }
        public function celebrityMarketingSport(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'celebrity-marketing')->first();
            $data['subservice'] = Services::where('slug', 'sport-personalities')->first();
            $data['blogs'] = Blogs::where('category_id', '7')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.celebrity-marketing.sport-personalities')->with($data);
        }
        public function celebrityMarketingBollywood(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'celebrity-marketing')->first();
            $data['subservice'] = Services::where('slug', 'bollywood-celebrities')->first();
            $data['blogs'] = Blogs::where('category_id', '7')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.celebrity-marketing.bollywood-celebraties')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function influencerMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'influencer-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '8')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.influencer-marketing.index')->with($data);
    }
        public function influencerMarketingNano(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'influencer-marketing')->first();
            $data['subservice'] = Services::where('slug', 'nano-influencer')->first();
            $data['blogs'] = Blogs::where('category_id', '8')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.influencer-marketing.nano-influencer')->with($data);
        }
        public function influencerMarketingMicro(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'influencer-marketing')->first();
            $data['subservice'] = Services::where('slug', 'micro-influencer')->first();
            $data['blogs'] = Blogs::where('category_id', '8')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.influencer-marketing.micro-influencer')->with($data);
        }
        public function influencerMarketingMacro(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'influencer-marketing')->first();
            $data['subservice'] = Services::where('slug', 'macro-influencer')->first();
            $data['blogs'] = Blogs::where('category_id', '8')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.influencer-marketing.macro-influencer')->with($data);
        }



//-------------------------------------------------------------------------------------------------------
    public function eventMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'event-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '9')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.event-marketing.index')->with($data);
    }
        public function eventMarketingCorporate(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'event-marketing')->first();
            $data['subservice'] = Services::where('slug', 'corporate-events')->first();
            $data['blogs'] = Blogs::where('category_id', '9')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.event-marketing.corporate-events')->with($data);
        }
        public function eventMarketingPrivate(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'event-marketing')->first();
            $data['subservice'] = Services::where('slug', 'private-events')->first();
            $data['blogs'] = Blogs::where('category_id', '9')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.event-marketing.private-events')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function transitMedia(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'transit-media')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.transit-media.index')->with($data);
    }

        public function transitMediaBoat(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'boat-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.boat-advertising')->with($data);
        }

        public function transitMediaTram(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'tram-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.tram-advertising')->with($data);
        }

        public function transitMediaTruck(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'truck-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.truck-advertising')->with($data);
        }

        public function transitMediaAirline(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'airline-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.airline-advertising.index')->with($data);
        }
            public function transitMediaAirlineEmirates(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airline-advertising')->first();
                $data['subservice'] = Services::where('slug', 'emirates-airline')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airline-advertising.emirates-airline')->with($data);
            }
            public function transitMediaAirlineEtihad(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airline-advertising')->first();
                $data['subservice'] = Services::where('slug', 'etihad-airline')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airline-advertising.etihad-airline')->with($data);
            }
            public function transitMediaAirlineFlyDubai(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airline-advertising')->first();
                $data['subservice'] = Services::where('slug', 'fly-dubai-airline')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airline-advertising.fly-dubai-airline')->with($data);
            }
            public function transitMediaAirlineSpicejet(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airline-advertising')->first();
                $data['subservice'] = Services::where('slug', 'spicejet-airline')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airline-advertising.spicejet-airline')->with($data);
            }
            public function transitMediaAirlineAirArabia(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airline-advertising')->first();
                $data['subservice'] = Services::where('slug', 'air-arabia-airline')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airline-advertising.air-arabia-airline')->with($data);
            }


        public function transitMediaAirport(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'airport-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.airport-advertising.index')->with($data);
        }
            public function transitMediaAirportPrivate(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airport-advertising')->first();
                $data['subservice'] = Services::where('slug', 'private-airport')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airport-advertising.private-airport')->with($data);
            }
            public function transitMediaAirportDubai(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airport-advertising')->first();
                $data['subservice'] = Services::where('slug', 'dubai-airport')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airport-advertising.dubai-airport')->with($data);
            }
            public function transitMediaAirportSharjah(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airport-advertising')->first();
                $data['subservice'] = Services::where('slug', 'sharjah-airport')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airport-advertising.sharjah-airport')->with($data);
            }
            public function transitMediaAirportIndian(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'airport-advertising')->first();
                $data['subservice'] = Services::where('slug', 'indian-airport')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.airport-advertising.indian-airport')->with($data);
            }

        public function transitMediaTaxi(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'taxi-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.taxi-advertising.index')->with($data);
        }
            public function transitMediaTaxiAbuDhabi(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'taxi-advertising')->first();
                $data['subservice'] = Services::where('slug', 'abu-dhabi-taxi')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.taxi-advertising.abu-dhabi-taxi')->with($data);
            }
            public function transitMediaTaxiPink(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'taxi-advertising')->first();
                $data['subservice'] = Services::where('slug', 'pink-taxi')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.taxi-advertising.pink-taxi')->with($data);
            }
            public function transitMediaTaxiBlue(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'taxi-advertising')->first();
                $data['subservice'] = Services::where('slug', 'blue-taxi')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.taxi-advertising.blue-taxi')->with($data);
            }
            public function transitMediaTaxiRedAirport(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'taxi-advertising')->first();
                $data['subservice'] = Services::where('slug', 'red-airport-taxi')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.taxi-advertising.red-airport-taxi')->with($data);
            }
            public function transitMediaTaxiRed(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'taxi-advertising')->first();
                $data['subservice'] = Services::where('slug', 'red-taxi')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.taxi-advertising.red-taxi')->with($data);
            }

        public function transitMediaBus(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'bus-advertising')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.bus-advertising.index')->with($data);
        }
            public function transitMediaBusWrapping(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'bus-advertising')->first();
                $data['subservice'] = Services::where('slug', 'bus-wrapping')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.bus-advertising.bus-wrapping')->with($data);
            }
            public function transitMediaBusStopWrapping(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'bus-advertising')->first();
                $data['subservice'] = Services::where('slug', 'bus-stop-wrap')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.bus-advertising.bus-stop-wrap')->with($data);
            }

        public function transitMediaMetroAds(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'transit-media')->first();
            $data['subservice'] = Services::where('slug', 'metro-ads')->first();
            $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.transit-media.metro-ads.index')->with($data);
        }
            public function transitMediaMetroAdsStation(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'metro-ads')->first();
                $data['subservice'] = Services::where('slug', 'metro-station-takeover')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.metro-ads.metro-station-takeover')->with($data);
            }
            public function transitMediaMetroAdsPillers(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'metro-ads')->first();
                $data['subservice'] = Services::where('slug', 'metro-pillars')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.metro-ads.metro-pillars')->with($data);
            }
            public function transitMediaMetroAdsDOOH(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'metro-ads')->first();
                $data['subservice'] = Services::where('slug', 'dooh-in-metro')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.metro-ads.dooh-in-metro')->with($data);
            }
            public function transitMediaMetroWall(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'metro-ads')->first();
                $data['subservice'] = Services::where('slug', 'metro-station-wall')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.metro-ads.metro-station-wall')->with($data);
            }
            public function transitMediaInsideMetroTrain(){
                $data['nav'] = 'services';
                $data['mainservice'] = Services::where('slug', 'transit-media')->first();
                $data['service'] = Services::where('slug', 'metro-ads')->first();
                $data['subservice'] = Services::where('slug', 'inside-metro-train')->first();
                $data['blogs'] = Blogs::where('category_id', '10')->orderBy('created_at', 'desc')->limit(3)->get();

                return view('web.services-new.transit-media.metro-ads.inside-metro-train')->with($data);
            }


//-------------------------------------------------------------------------------------------------------

    public function leadGeneration(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'lead-generation')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '15')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.lead-generation.index')->with($data);
    }
        public function leadGenerationCPL(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'lead-generation')->first();
            $data['subservice'] = Services::where('slug', 'cost-per-lead')->first();
            $data['blogs'] = Blogs::where('category_id', '15')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.lead-generation.cost-per-lead')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function sponsorships(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'sponsorships')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '17')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.sponsorships.index')->with($data);
    }
        public function sponsorshipsCorporate(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'sponsorships')->first();
            $data['subservice'] = Services::where('slug', 'corporate')->first();
            $data['blogs'] = Blogs::where('category_id', '17')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.sponsorships.corporate')->with($data);
        }
        public function sponsorshipsEntertainment(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'sponsorships')->first();
            $data['subservice'] = Services::where('slug', 'entertainment')->first();
            $data['blogs'] = Blogs::where('category_id', '17')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.sponsorships.entertainment')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function cgiAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'creative-and-cgi-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '16')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.creative-and-cgi-advertising.index')->with($data);
    }
        public function cgiAdvertisingCreative(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'creative-and-cgi-advertising')->first();
            $data['subservice'] = Services::where('slug', 'creative')->first();
            $data['blogs'] = Blogs::where('category_id', '16')->orderBy('created_at', 'desc')->limit(3)->get();

            return view('web.services-new.creative-and-cgi-advertising.creative')->with($data);
        }


//-------------------------------------------------------------------------------------------------------

    public function radioAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'radio-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '5')->orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.services-new.radio-advertising')->with($data);
    }


//-------------------------------------------------------------------------------------------------------

    public function websiteDevelopment(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'website-development')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['web_drop'] = '1';
        
        return view('web.services.website-development.index')->with($data);
    }
        public function fullStackDevelopment(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'website-development')->first();
            $data['subservice'] = Services::where('slug', 'full-stack-web-development')->first();
            $data['web_drop'] = '1';
            
            return view('web.services.website-development.fullStackDevelopment')->with($data);
        }
        public function eCommerceDevelopment(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'website-development')->first();
            $data['subservice'] = Services::where('slug', 'e-commerce-website-development')->first();
            $data['web_drop'] = '1';
            
            return view('web.services.website-development.eCommerceDevelopment')->with($data);
        }
        public function websiteMaintenance(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'website-development')->first();
            $data['subservice'] = Services::where('slug', 'website-maintenance-services')->first();
            $data['web_drop'] = '1';
            
            return view('web.services.website-development.websiteMaintenance')->with($data);
        }


//-------------------------------------------------------------------------------------------------------


    public function seoServicesDubai(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'seo-services')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['web_drop'] = '1';
        $data['noPopup'] = '1';
        
        return view('web.services.seo.index-ads')->with($data);
    }



    public function seoServices(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'seo-services')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();
        $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
        $data['web_drop'] = '1';
        
        return view('web.services-new.seo.index-new')->with($data);
    }
        public function aiOptimization(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'ai-seo-optimization')->first();
            $data['blogs'] = Blogs::where('category_id', '34')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.aiOptimization')->with($data);
        }
        public function localSEO(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'local-seo')->first();
            $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.localSEO')->with($data);
        }
        public function techSupport(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'tech-support')->first();
            $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.techSupport')->with($data);
        }
        public function freeAudit(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'free-seo-audit')->first();
            $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.freeAudit')->with($data);
        }
        public function caseStudies(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'case-studies')->first();
            $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.caseStudies')->with($data);
        }
        public function pricePackage(){
            $data['nav'] = 'services';
            $data['service'] = Services::where('slug', 'seo-services')->first();
            $data['subservice'] = Services::where('slug', 'price-and-package')->first();
            $data['blogs'] = Blogs::where('category_id', '27')->orderBy('created_at', 'desc')->limit(3)->get();
            $data['web_drop'] = '1';
            
            return view('web.services-new.seo.pricePackage')->with($data);
        }
}
