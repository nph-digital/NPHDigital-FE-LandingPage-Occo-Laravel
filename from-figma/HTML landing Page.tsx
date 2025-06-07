import { Card, CardContent } from "@/components/ui/card";
import {
  NavigationMenu,
  NavigationMenuItem,
  NavigationMenuLink,
  NavigationMenuList,
} from "@/components/ui/navigation-menu";
import React from "react";

// Replace local image imports with placeholders
// In a real implementation, these would be properly imported from your assets folder
const assetPlaceholders = {
  asset1: "",
  ball: "",
  ball2: "",
  ball3: "",
  ball4: "",
  ball5: "",
  ball6: "",
  light: "",
  light2: "",
  light3: "",
  light4: "",
  light5: "",
  light6: "",
  frame1707481333: "",
  gif3: "",
  gif18: "",
  gif30: "",
  gif37: "",
  group18574: "",
  image: "",
};

// Navigation items data
const navigationItems = [
  { title: "Giới thiệu", active: true },
  { title: "Chính sách bảo mật", active: false },
  { title: "Thỏa thuận dịch vụ", active: false },
  { title: "Liên hệ ngay", active: false },
];

// Star particles data
const starParticles = [
  { top: "444px", left: "736px" },
  { top: "60px", left: "771px" },
  { top: "165px", left: "1027px" },
  { top: "107px", left: "521px" },
  { top: "147px", left: "380px" },
  { top: "187px", left: "58px" },
  { top: "448px", left: "55px" },
  { top: "715px", left: "477px" },
  { top: "452px", left: "499px" },
  { top: "335px", left: "376px" },
  { top: "257px", left: "339px" },
  { top: "329px", left: "136px" },
  { top: "467px", left: "173px" },
  { top: "645px", left: "107px" },
  { top: "604px", left: "1308px" },
  { top: "205px", left: "1269px" },
  { top: "125px", left: "1175px" },
  { top: "74px", left: "1361px" },
  { top: "106px", left: "745px" },
  { top: "3px", left: "460px" },
  { top: "18px", left: "701px" },
  { top: "639px", left: "722px" },
];

const LandingPage = (): JSX.Element => {
  return (
    <main className="relative w-full h-[800px] overflow-hidden bg-gradient-to-br from-[rgba(82,39,176,1)] via-[rgba(30,0,140,1)] to-[rgba(70,14,163,1)]">
      {/* Background decorative elements */}
      <div className="relative w-full h-full">
        {/* Decorative balls and lights */}
        <div className="absolute w-[458px] h-[458px] top-[23px] left-[1148px] rotate-180">
          <div className="relative h-[508px]">
            <div className="absolute w-[458px] h-[458px] top-0 left-0">
              <div className="relative w-[389px] h-[458px] left-[69px]">
                <img
                  className="absolute w-[292px] h-[458px] top-0 left-[97px] -rotate-180 object-cover"
                  alt="Ball"
                  src={assetPlaceholders.ball}
                />
                <div className="w-[324px] h-[324px] top-[63px] left-0 rounded-[161.85px/162.09px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light" />
                <img
                  className="w-[292px] h-[458px] left-[97px] absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                  alt="Light"
                  src={assetPlaceholders.light}
                />
              </div>
            </div>
            <div className="absolute w-[62px] h-[62px] top-[446px] left-[315px] rotate-180">
              <div className="relative h-[53px]">
                <img
                  className="absolute w-[62px] h-[35px] top-0 left-0 -rotate-180 object-cover"
                  alt="Ball"
                  src={assetPlaceholders.ball2}
                />
                <div className="w-11 h-11 top-2.5 left-[9px] rounded-[21.91px/21.94px] bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)] absolute mix-blend-hard-light" />
                <img
                  className="w-[62px] h-[35px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                  alt="Light"
                  src={assetPlaceholders.light2}
                />
              </div>
            </div>
          </div>
        </div>

        <div className="w-[230px] h-[230px] top-[492px] left-[1064px] absolute rotate-180">
          <div className="absolute w-[230px] h-[230px] top-0 left-[-17px]">
            <div className="relative h-[230px]">
              <img
                className="absolute w-[230px] h-[230px] top-0 left-0 -rotate-180 object-cover"
                alt="Ball"
                src={assetPlaceholders.ball3}
              />
              <div className="w-[163px] h-[163px] top-8 left-[35px] rounded-[81.28px/81.4px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light" />
              <img
                className="w-[230px] h-[230px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                alt="Light"
                src={assetPlaceholders.light3}
              />
            </div>
          </div>
          <div className="absolute w-[198px] h-[198px] top-[125px] left-[1051px] rotate-180">
            <div className="relative h-[198px]">
              <img
                className="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 object-cover"
                alt="Ball"
                src={assetPlaceholders.ball4}
              />
              <div className="absolute w-[140px] h-[140px] top-[31px] left-[30px] rounded-[69.97px/70.07px] mix-blend-hard-light bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)]" />
              <img
                className="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 mix-blend-lighten object-cover"
                alt="Light"
                src={assetPlaceholders.light4}
              />
            </div>
          </div>
        </div>

        <div className="w-[81px] h-[81px] top-[694px] left-36 absolute rotate-180">
          <div className="absolute w-[81px] h-[81px] top-0 -left-1.5">
            <div className="relative h-[81px]">
              <img
                className="absolute w-[81px] h-[81px] top-0 left-0 -rotate-180 object-cover"
                alt="Ball"
                src={assetPlaceholders.ball5}
              />
              <div className="w-[57px] h-[57px] top-[11px] left-3 rounded-[28.62px/28.67px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light" />
              <img
                className="w-[81px] h-[81px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                alt="Light"
                src={assetPlaceholders.light5}
              />
            </div>
          </div>
          <div className="absolute w-[198px] h-[198px] top-[-117px] left-[1051px] rotate-180">
            <div className="absolute w-[198px] h-[198px] top-[-12027px] left-[-19159px]">
              <img
                className="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 object-cover"
                alt="Ball"
                src={assetPlaceholders.ball6}
              />
              <img
                className="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 mix-blend-lighten object-cover"
                alt="Light"
                src={assetPlaceholders.light6}
              />
            </div>
            <div className="absolute w-[140px] h-[140px] top-[31px] left-[30px] rounded-[69.97px/70.07px] mix-blend-hard-light bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)]" />
          </div>
        </div>

        {/* Overlay with blur effect */}
        <div className="absolute w-full h-full top-0 left-0 bg-[#8800ff87] backdrop-blur-[10px] backdrop-brightness-[100%]" />

        {/* Star particles */}
        {starParticles.map((star, index) => (
          <div
            key={index}
            className="absolute w-1.5 h-1.5 rounded-[2.89px] rotate-[-60.00deg] shadow-[0px_0px_5.77px_#ffffff61] bg-radial-gradient from-[rgba(214,189,255,1)] to-[rgba(123,44,255,1)]"
            style={{ top: star.top, left: star.left }}
          />
        ))}

        {/* App screenshots and decorative images */}
        <img
          className="w-[222px] h-[222px] top-[258px] left-[983px] absolute object-cover"
          alt="App screenshot"
          src={assetPlaceholders.gif3}
        />
        <img
          className="w-[229px] h-[283px] top-[104px] left-[1211px] absolute object-cover"
          alt="App screenshot"
          src={assetPlaceholders.gif37}
        />
        <img
          className="w-[200px] h-[217px] top-[108px] left-[798px] absolute object-cover"
          alt="App screenshot"
          src={assetPlaceholders.gif30}
        />
        <img
          className="w-[340px] h-[232px] top-[568px] left-[786px] absolute object-cover"
          alt="App screenshot"
          src={assetPlaceholders.gif18}
        />
        <img
          className="absolute w-[212px] h-[212px] top-[253px] left-[996px] object-cover"
          alt="App screenshot"
          src={assetPlaceholders.image}
        />
        <img
          className="absolute w-[473px] h-[376px] top-[220px] left-[817px]"
          alt="Phone mockup"
          src={assetPlaceholders.group18574}
        />

        {/* Navigation header */}
        <header className="flex w-full items-center justify-between px-20 py-4 absolute top-0 left-0 backdrop-blur-[1px] bg-gradient-to-b from-[rgba(0,0,0,0.3)] to-transparent">
          {/* Logo and brand */}
          <div className="flex items-end gap-4">
            <img
              className="w-[51px] h-[42.06px] object-cover"
              alt="OCCO Logo"
              src={assetPlaceholders.asset1}
            />
            <div className="flex flex-col items-start gap-1">
              <h1 className="font-black text-colors-electric-violet-50 text-2xl leading-6">
                OCCO
              </h1>
              <p className="font-black text-colors-electric-violet-50 text-sm leading-[14px]">
                Mạng xã hội công nghệ
              </p>
            </div>
          </div>

          {/* Navigation menu */}
          <NavigationMenu>
            <NavigationMenuList className="flex items-center gap-8">
              {navigationItems.map((item, index) => (
                <NavigationMenuItem key={index}>
                  <NavigationMenuLink
                    className={`relative mt-[-2.00px] font-bold text-base leading-[38px] whitespace-nowrap ${
                      item.active
                        ? "text-white border-b-2 border-white"
                        : "text-[#dfdfdf]"
                    }`}
                  >
                    {item.title}
                  </NavigationMenuLink>
                </NavigationMenuItem>
              ))}
            </NavigationMenuList>
          </NavigationMenu>
        </header>

        {/* Main content */}
        <section className="flex flex-col w-[584px] items-start gap-8 absolute top-[167px] left-[140px]">
          <Card className="bg-transparent border-none shadow-none">
            <CardContent className="flex flex-col items-start gap-[22px] p-0">
              <h2 className="self-stretch mt-[-1.00px] font-bold text-white text-[64px] tracking-[0] leading-[70px]">
                Kết nối Thiên Ý Kết bạn chỉ 1 chạm
              </h2>
              <p className="w-[560px] font-semibold text-white text-base tracking-[0] leading-8">
                Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm
                giao? Tải ngay Occo để khám phá những mối quan hệ ý nghĩa, an
                toàn và đầy thú vị. Thiên Ý dẫn lối – bạn chỉ cần chạm!
              </p>
            </CardContent>
          </Card>

          {/* Download buttons */}
          <div className="flex gap-2">
            <img
              className="h-auto"
              alt="Download buttons"
              src={assetPlaceholders.frame1707481333}
            />
          </div>
        </section>
      </div>
    </main>
  );
};

export default LandingPage;