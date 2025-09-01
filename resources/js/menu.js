const menus = [
    {
        route: "about.index",
        name: "PETMON",
        submenus: [
            { route: "about.index", name: "소개" },
            { route: "about.hello", name: "인사말" },
            { route: "about.org", name: "조직도" },
            { route: "about.people", name: "함께하는 사람들" },
            { route: "about.ci", name: "CI" },
        ],
    },
    {
        route: "contact.index",
        name: "Contact us",
        submenus: [
            { route: "contact.index", name: "도입문의" },
            { route: "contact.status", name: "PETMON 현황" },
        ],
    },
    {
        route: "community.notice",
        name: "Community",
        submenus: [
            { route: "community.notice", name: "공지사항" },
            { route: "community.gallery", name: "포토 갤러리" },
            { route: "community.newsroom", name: "뉴스룸" },
        ],
    },
    {
        route: "donation.index",
        name: "기부하기",
        submenus: [
            { route: "donation.index", name: "기부하기" },
            { route: "donation.list", name: "나의 기부" },
            // { route: "donation.history", name: "기부 내역 확인" },
        ],
    },
    {
        route: "esg.index",
        name: "ESG",
        submenus: [
            { route: "esg.index", name: "우리의 ESG" },
            {
                route: "esg.program",
                name: "ESG리더 양성 프로그램",
                html: "ESG리더 양성<br />프로그램",
            },
        ],
    },
];

export default menus;
