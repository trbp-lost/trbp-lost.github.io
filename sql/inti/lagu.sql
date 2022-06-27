DROP TABLE `lagu`;

CREATE TABLE IF NOT EXISTS `lagu` (
  `judul` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL,
  PRIMARY KEY (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `lagu` (`judul`, `url`, `foto`, `kata_kunci`) VALUES
('Alan Walker All Falls Down', 'https://drive.google.com/uc?authuser=0&id=1fcYINsbvYwtweUwTxtB3Bt2jzD3X3dIo&export=download', 'https://cdn-2.tstatic.net/wow/foto/bank/images/alan-walker-all-falls-down.jpg', 'alan walker all falls down'),

('Alan Walker Darkside', 'https://drive.google.com/uc?authuser=0&id=1hD4TuBfbQUcScP2MPHvQE7ANwIOtwA00&export=download', 'https://1.bp.blogspot.com/-5aNO2SisWX0/W3pNcMArqYI/AAAAAAAAKwc/OP1Zr_xErtIgtvqYTmC-g3_bSPK-m8_twCLcBGAs/s1600/Lirik%2BLagu%2BAlan%2BWalker%2B-%2BDarkside%2Bdan%2BTerjemahan%2BBahasa%2BIndonesia%2B-min.png', 'alan walker darkside'),

('Alan Walker Different World', 'https://drive.google.com/uc?authuser=0&id=1IFZq4m5atJAZ0fW-0iLSRy6wCyhHrAj8&export=download', 'https://2.bp.blogspot.com/-P4jxLu8qd4w/XAX_vGAVyfI/AAAAAAAAML4/hLHLVzI_okwvRr74a1d-MIvIZ-VjOAW1wCLcBGAs/s1600/Foto-Terbaru-Alan-Walker-2018.jpg', 'different world alan walker'),

('Alan Walker Faded', 'https://drive.google.com/uc?authuser=0&id=15Mim3dDhBauffXA4XbX7rWMydyqEK9SM&export=download', 'https://i.ytimg.com/vi/60ItHLz5WEA/maxresdefault.jpg', 'alan walker faded'),

('Alan Walker On My Way', 'https://drive.google.com/uc?authuser=0&id=1PD6J4WTVzJb65J7-RXAsQ4vImEGI_3da&export=download', 'https://3.bp.blogspot.com/-owSOVoaq_-E/XKDzwIuqcDI/AAAAAAAAKTk/04ZCX_7Gk8c60_7jbjZOic_Vgs5pN05UQCKgBGAs/s1600/f68cc2b7276592116d2027e821b0ca4d.jpg', 'alan Walker on my way'),

('Alan Walker On My Way (Versi Koplo) [EvP Music]', 'https://drive.google.com/uc?authuser=0&id=1J3E1RvULiv9bVz1aoFN7STTBKJdmXsao&export=download', 'https://i1.sndcdn.com/artworks-000519863016-sg455o-t500x500.jpg', 'alan Walker on my way versi koplo'),

('Alan Walker Sing Me To Sleep', 'https://drive.google.com/uc?authuser=0&id=1I6yBX4Z5KyRzpKRott1ULinFnejEfMru&export=download', 'https://imgcache.joox.com/music/joox/photo/mid_album_265/f/d/fa4ab733af8687fd.jpg', 'alan walker sing me to sleep'),

('Alan Walker K-391 - Ignite', 'https://drive.google.com/uc?authuser=0&id=1c_VeKyzODF58XICSaWxgRNI3ZHiILkV1&export=download', 'https://i1.sndcdn.com/artworks-000347333769-91oyba-t500x500.jpg', 'alan walker k391 ignite'),

('Alan Walker Lily - K-391 & Emelie Hollow ', 'https://drive.google.com/uc?authuser=0&id=1FoZIjz7OVgU_01qlRFrJBI1DJTzI4Hk4&export=download', 'https://i0.wp.com/travistory.com/wp-content/uploads/2019/03/lirik-lagu-lily-alan-walker.jpg?fit=640%2C440&ssl=1', 'alan walker lily'),

('Alan Walker vs Coldplay Hymn For The Weekend [Remix]', 'https://drive.google.com/uc?authuser=0&id=1hpsvnQuqxLBxZb4u4lDE_QNrMgjcZXGQ&export=download', 'https://i1.sndcdn.com/artworks-000179139274-xq9u83-t500x500.jpg', 'alan walker vs coldplay hymn for the weekend remix'),

('Bruno Mars - Grenade', 'https://drive.google.com/uc?authuser=0&id=1I9vA37h-pM15mCfP4-drwm33XnW2ccnT&export=download', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv0ZhcBqVjPEOplpgh2yTMsEnrZFC8TBjSoncc9fDC0fvavKBD', 'bruno mars grenade'),

('Camila Cabello - Havana', 'https://drive.google.com/uc?authuser=0&id=1Fgwiolrt7C6xaFZLx-Lah6B_OgZV_u1F&export=download', 'https://i.ytimg.com/vi/HCjNJDNzw8Y/maxresdefault.jpg', 'camila cabello havana'),

('Cartoon - On & On', 'https://drive.google.com/uc?authuser=0&id=1_vqa8vpNPYYST3AoV9N9z5BLo4OCD3dA&export=download', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPc5IM1FoA3WL2S0wZUIsNx5rpk5Jj2ajqWxNbIS7u4fsbw-_FFQ', 'cartoon on and on'),

('Christina Perri - A Thousand Years', 'https://drive.google.com/uc?authuser=0&id=1CbntKq0WFSy1FL89c8dl5a_OMuKMOtMi&export=download', 'https://3.bp.blogspot.com/--gDqidsKk48/WEPHxOxJyaI/AAAAAAAAM5Q/-Pec1pwgLZIClBDu0FPqjNsKP2NTDQS5wCLcB/s1600/A%2BThousand%2BYears%2B%25E2%2580%2593%2BChristina%2BPerri.jpg', 'christina perri thousand years'),

('Clean Bandit - Symphony', 'https://drive.google.com/uc?authuser=0&id=11qp-4zxlS5Hou6e7tZeEo8yzAnxaq7Xf&export=download', 'http://cdn.baeblemusic.com/images/miscvideos/clean_bandit/clean_bandit_symphony_feat_zara_larsson-592.jpg', 'clean bandit symphony'),

('Does - Donten', 'https://drive.google.com/uc?authuser=0&id=1EB3k-mdh3YQqoone7Tnnr2UUw0XPMDGL&export=download', 'http://3.bp.blogspot.com/-1DTw4ahF1Qc/U_wm_BNPSqI/AAAAAAAAALU/gSPPjllrWJQ/s1600/url.jpg', 'does donten'),

('Ed Sheeran - Perfect', 'https://drive.google.com/uc?authuser=0&id=19fLqIEExUozRUCSAON6nPAVb1Qn4Ql0z&export=download', 'https://assets.smoothradio.com/2018/18/ed-sheeran-perfect-video-1525791237-article-0.jpg', 'sheeran perfect'),

('Eir Aoi - Ignite', 'https://drive.google.com/uc?authuser=0&id=1gDf6IYozLulYm-WnA07PR-65jVknnvHK&export=download', 'https://i1.sndcdn.com/artworks-000090117426-spk0h6-t500x500.jpg', 'Eir Aoi - Ignite'),

('Eir Aoi - Innocence', 'https://drive.google.com/uc?authuser=0&id=15ITfnUsRjxB82tGEYeWWHwnRC8nFUcwx&export=download', 'https://vignette.wikia.nocookie.net/swordartonline/images/f/f1/Innocence_Aoi_Eir.png/revision/latest?cb=20161009152836', 'eir aoi innocence'),

('Elektronomia - Sky High', 'https://drive.google.com/uc?authuser=0&id=10b8141XJdbj9H-J_rk-d5zXAUK93TrTE&export=download', 'https://i1.sndcdn.com/artworks-000200919021-zc6zfc-t500x500.jpg', 'elektronomia sky high'),

('Fall Out Boy - Centuries', 'https://drive.google.com/uc?authuser=0&id=1VuHnnbjxuETAs3TQ6P_tgxh-ACoy_t6z&export=download%', 'https://www.coupdemainmagazine.com/sites/default/files/styles/full_width/public/article/7062/hero-7062-1845441057.jpg?itok=_HVVdDQe', 'fall out boy centuries'),

('Fall Out Boy - The Phoenix', 'https://drive.google.com/uc?authuser=0&id=1nl_9QE2L_BT3Cr7R5DarYKnxvIGTPIkR&export=download', 'https://i.ytimg.com/vi/5JqY-6q-RNA/maxresdefault.jpg', 'fall out boy phoenix'),

('Fourtwnty - Zona Nyaman', 'https://drive.google.com/uc?authuser=0&id=1dNHCGJjNfj2054sMSxkeJ3XIRktQYvdT&export=download', 'https://2.bp.blogspot.com/-Bv-k4uc-Wxk/Wnxj5qz9LBI/AAAAAAAAACw/i3NYuDLL4ecLCCmMX4XLceCSOjlt2CeJACLcBGAs/s1600/Fourtwnty%252B-%252BZona%252BNyaman%252BOST.%252BFilosofi%252BKopi%252B2%252BBen%252B%252526%252BJody.jpg', 'fourtwnty zona nyaman'),

('Haruka Tomatsu - Courage', 'https://drive.google.com/uc?authuser=0&id=1kVc38aywUNdR37iuqvrPdyRs8VK9XcjC&export=download', 'https://2.bp.blogspot.com/-kR9_lrDiaY0/VIzK1XnaY-I/AAAAAAAAF5w/uHFtxyCsePk/s1600/couragesao.jpg', 'haruka tomatsu courage'),

('Imagine Dragons - Believer', 'https://drive.google.com/uc?authuser=0&id=1PSPpreEtOiYDHDPadMzVJ5wSBxHgjOkx&export=download', 'https://is3-ssl.mzstatic.com/image/thumb/Music111/v4/9e/7d/3e/9e7d3e5b-222d-b130-845c-c6f1f56bcbce/Believer-Imagine-Dragons.png/268x0w.jpg', 'imagine dragons believer'),

('Imagine Dragons - Im So Sorry', 'https://drive.google.com/uc?authuser=0&id=1U_hgboFukGDPncedmsEIqUQ8Sq6vrniD&export=download', 'https://i.ytimg.com/vi/5pJbS2iw0vQ/maxresdefault.jpg', 'imagine dragons sorry'),

('Imagine Dragons - Radioactive', 'https://drive.google.com/uc?authuser=0&id=1WoplGCVHPUpI5iwgMeTxf0eLzIvJQyA9&export=download', 'http://slack-time.com/thumbs_ft/16/mgndrgns14rdctv11_12.jpg', 'imagine dragons radioactive'),

('Janji - Heroes Tonight', 'https://drive.google.com/uc?authuser=0&id=17ayIMjkrgLAwzbl9UsoSgeMSQ75AMY9W&export=download', 'https://audiograb.com/images/cover/200x200/bLzRkYfFejWACfN.jpg', 'janji heroes tonight'),

('Juice Wrld - Lucid Dreams', 'https://drive.google.com/uc?authuser=0&id=12h3EE0Za4tW7Nspm_n0_2TEBLFdqU5rJ&export=download', 'https://i.ytimg.com/vi/_fh64GbFSw4/maxresdefault.jpg', 'juice wrld lucid dreams'),

('Legends Never Die (ft. Against The Current)', 'https://drive.google.com/uc?authuser=0&id=13qyC8GWGiXXJKkex8YymZrQGiJDRrq6N&export=download', 'https://images.genius.com/6ebecaaae99bf145bc53d5a4b19a9f3d.1000x1000x1.jpg', 'legends never die against the current'),

('LiSA - Crossing Field', 'https://drive.google.com/uc?authuser=0&id=18yppdSbmAtFf2TAJEwbp6YWLi056IAoy&export=download', 'https://vignette.wikia.nocookie.net/swordartonline/images/b/bf/Crossing_field_anime_limited_pressing.png/revision/latest?cb=20161006155600', 'lisa crossing field'),

('Magic Party - Egao no Mahou', 'https://drive.google.com/uc?authuser=0&id=10j680WsYN_ymj89SUFtffGCyIxxQz_3y&export=download', 'https://vignette.wikia.nocookie.net/fairytail/images/a/a2/Opening_5.jpg/revision/latest?cb=20150617032730&path-prefix=id', 'magic party egao no mahou'),

('Maroon 5 - Payphone', 'https://drive.google.com/uc?authuser=0&id=1cG6ZI97hehn01I1b2AHhiIAVne_4KHOj&export=download', 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7f/Maroon_5_Payphone_cover.png/220px-Maroon_5_Payphone_cover.png', 'maroon payphone'),

('NaFF - Akhirnya Ku Menemukanmu', 'https://drive.google.com/uc?authuser=0&id=1WlCJi0zk8pGqT1-w-PdehmlBR8FT49c3&export=download', 'https://2.bp.blogspot.com/-ve5mU8rldDU/WXV7A_BBQzI/AAAAAAAAAEU/GFLti9dzThsX2nZfUreNmygANyDiRAt5QCLcBGAs/s1600/akhirnya-ku-menemukanmu-naff-lirik-Chord.jpg', 'naff akhirnya menemukanmu'),

('OneRepublic - Counting Stars', 'https://drive.google.com/uc?authuser=0&id=1VViFRQ1ZGaMMjte93fwVtRgHxRt9wd1i&export=download', 'https://i.ytimg.com/vi/hT_nvWreIhg/maxresdefault.jpg', 'onerepublic counting stars'),

('Passenger - Let Her Go', 'https://drive.google.com/uc?authuser=0&id=1dajsgyZVL8xdk4X7k5sFs-cJmZHm2nJh&export=download', 'https://www.harp-school.com/wp-content/uploads/2016/04/passenger_thumb2.jpg', 'passenger let her go'),

('Pirates Of The Caribbean', 'https://drive.google.com/uc?authuser=0&id=1qhTZclFMrG0cuecGUliTV32Rw0gGrxg3&export=download', 'http://pik.vn/2015f8fb6e60-fc3a-484d-a4a5-130533ecafe6.jpeg', 'pirates the caribbean'),

('RISE (ft. The Glitch Mob, Mako, and The Word Alive)', 'https://drive.google.com/uc?authuser=0&id=1uPsNJhZQ7HvK4lZ_CuJ_e_WVmV0TBCmc&export=download', 'https://i.ytimg.com/vi/fB8TyLTD7EE/maxresdefault.jpg', 'RISE the glitch mob'),

('Sam Smith - Im Not The Only One', 'https://drive.google.com/uc?authuser=0&id=1wAAuIAjpySv14KzXuvMrdPjHU-DbC3jQ&export=download', 'https://i1.sndcdn.com/artworks-000113867622-ge40li-t500x500.jpg', 'sam smith im not the only one'),

('Sam Smith - Stay With Me', 'https://drive.google.com/uc?authuser=0&id=1vtZ0vlGXhkfQZnlQm8GNEofkE9S3zAX2&export=download', 'https://static.stereogum.com/uploads/2014/03/Sam-Smith-Stay-With-Me-video-640x389.jpg', 'sam smith stay with me'),

('Shontelle - Impossible', 'https://drive.google.com/uc?authuser=0&id=1ZDH8I6zQVRVfuvmgniC6At2HkR3t3Kdc&export=download', 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/Impossible_%28Shontelle_single_-_cover_art%29.jpg/220px-Impossible_%28Shontelle_single_-_cover_art%29.jpg', 'shontelle impossible'),

('Suzuki Konomi - This Game', 'https://drive.google.com/uc?authuser=0&id=1Mg2klFdelNtyqa7KQ0zgqHuZCXUmqxxP&export=download', 'https://i.ytimg.com/vi/CaksNlNniis/maxresdefault.jpg', 'suzuki konomi this game'),

('The White Stripes - Seven Nation Army (The Glitch Mob Remix)', 'https://drive.google.com/uc?authuser=0&id=1KSViF6XZeEYsi8PxNQ34ZTmJCGMCL-3T&export=download', 'https://i1.sndcdn.com/artworks-000004691444-4pqy6u-t500x500.jpg', 'the white stripes seven nation army the glitch mob remix'),

('Tommy heavenly6 - Pray', 'https://drive.google.com/uc?authuser=0&id=1de4Y8cPhCfwsz0GVreJXucdM5jNWw9Zi&export=download', 'https://i.pinimg.com/originals/fa/54/9f/fa549f23d63144bb0cfa9c30d688ca72.png', 'tommy heavenly pray'),

('Twenty One Pilots - Ride', 'https://drive.google.com/uc?authuser=0&id=1HyagXcaj9UAWtxMQQ3O5yU_kRYMixdf0&export=download', 'https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Twenty_One_Pilots_%E2%80%93_Ride.jpg/220px-Twenty_One_Pilots_%E2%80%93_Ride.jpg', 'twenty one pilots ride'),

('Virgoun - Bukti', 'https://drive.google.com/uc?authuser=0&id=1s9smnh8i4-G8SOcck_r7b4wnwQCBorLm&export=download', 'https://images.genius.com/516460cfc86bde1cbf6dcb3841236084.630x630x1.jpg', 'virgoun bukti'),

('Warriyo - Mortals (feat. Laura Brehm)', 'https://drive.google.com/uc?authuser=0&id=1ufeUkqTFwfy0rnuBVFNRZJ8fAlnehzo9&export=download', 'https://i1.sndcdn.com/artworks-000198573644-ayznj3-t500x500.jpg', 'warriyo mortals laura brehm'),

('We Are Number One', 'https://drive.google.com/uc?authuser=0&id=1Lp6pBAxLju6DrxuCA3vW_JyEDSCp6rqh&export=download', 'https://upload.wikimedia.org/wikipedia/en/5/54/We_Are_Number_One.jpg', 'we are number one');