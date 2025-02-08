-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 03, 2025 lúc 04:22 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `leagueoflegends`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `champions`
--

CREATE TABLE `champions` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `voice` varchar(100) DEFAULT NULL,
  `story` varchar(1000) DEFAULT NULL,
  `splash_art` text NOT NULL,
  `animated_splash_art` text NOT NULL,
  `position_x` float NOT NULL,
  `position_y` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `champions`
--

INSERT INTO `champions` (`id`, `name`, `region`, `role`, `title`, `voice`, `story`, `splash_art`, `animated_splash_art`, `position_x`, `position_y`) VALUES
('Aatrox', 'Aatrox', 'Runeterra', 'Fighter', 'the Darkin Blade', 'I must destroy even hope…', 'Once honored defenders of Shurima against the Void, Aatrox and his brethren would eventually become an even greater threat to Runeterra, and were defeated only by cunning mortal sorcery. But after centuries of imprisonment, Aatrox was the first to find freedom once more, corrupting and transforming those foolish enough to try and wield the magical weapon that contained his essence. Now, with stolen flesh, he walks Runeterra in a brutal approximation of his previous form, seeking an apocalyptic and long overdue vengeance.', 'Splash_Art/Aatrox_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/606a1890faae447a7ea465d62b1dc87ab6ab360d.webm', 70, 32),
('Ahri', 'Ahri', 'Ionia', 'Mage', 'The Nine-Tailed Fox', 'Human emotions can be more volatile than even the deepest magic.', 'Innately connected to the magic of the spirit realm, Ahri is a fox-like vastaya who can manipulate her prey\'s emotions and consume their essence—receiving flashes of their memory and insight from each soul she consumes. Once a powerful yet wayward predator, Ahri is now traveling the world in search of remnants of her ancestors while also trying to replace her stolen memories with ones of her own making.', 'Splash_Art/Ahri_0.jpg', '', 67, 15),
('Akali', 'Akali', 'Ionia', 'Assassin', 'the Rogue Assassin', 'If you look dangerous, you better be dangerous.', ' Abandoning the Kinkou Order and her title of the Fist of Shadow, Akali now strikes alone, ready to be the deadly weapon her people need. Though she holds onto all she learned from her master Shen, she has pledged to defend Ionia from its enemies, one kill at a time. Akali may strike in silence, but her message will be heard loud and clear: fear the assassin with no master.', 'Splash_Art/Akali_0.jpg', '', 49, 15),
('Ashe', 'Ashe', 'The_Freljord', 'Marksman', 'the Frost Archer', 'All the world on one arrow.', ' Iceborn warmother of the Avarosan tribe, Ashe commands the most populous horde in the north. Stoic, intelligent, and idealistic, yet uncomfortable with her role as leader, she taps into the ancestral magics of her lineage to wield a bow of True Ice. With her people’s belief that she is the mythological hero Avarosa reincarnated, Ashe hopes to unify the Freljord once more by retaking their ancient, tribal lands.', 'Splash_Art/Ashe_0.jpg', '', 70, 5),
('Aurelion_Sol', 'Aurelion Sol', 'Runeterra', 'Mage', 'The Star Forger', 'Naturally.', ' Aurelion Sol once graced the vast emptiness of the celestial realm with wonders of his own devising, but was tricked by the Aspects of Targon into revealing the secrets of a sun that he himself created. His awesome power was channeled into immortal god-warriors to protect the apparently insignificant world of Runeterra—now, desiring a return to his mastery of the cosmos, Aurelion Sol will drag the very stars from the sky, if he must, in order to regain his freedom.', 'Splash_Art/Aurelion_Sol_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/36e23e03ec34c0951ed9ddae6b94970ba3ef5290.webm', 57, 0),
('Azir', 'Azir', 'Shurima', 'Mage', 'the Emperor of the Sands', 'Shurima! Your emperor has returned!', ' Azir was a mortal emperor of Shurima in a far distant age, a proud man who stood at the cusp of immortality. His hubris saw him betrayed and murdered at the moment of his greatest triumph, but now, millennia later, he has been reborn as an Ascended being of immense power. With his buried city risen from the sand, Azir seeks to restore Shurima to its former glory.', 'Splash_Art/Azir_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/07df115d79f735cf45c50f552d2ebd06b77be955.webm', 84, 13),
('Bard', 'Bard', 'Runeterra', 'Support', 'the Wandering Caretaker', 'The chimes of his footsteps are echoes of change.', ' Atraveler from beyond the stars, Bard is an agent of serendipity who strives to maintain the harmony between creation, and the cold indifference of what lies beyond it. Many Runeterrans sing songs that ponder his extraordinary nature, yet they all agree that the cosmic vagabond is drawn to artifacts of great magical power. Surrounded by a jubilant choir of helpful meeps, it is impossible to mistake his actions as malevolent, as Bard always serves the greater good… in his own odd way.', 'Splash_Art/Bard_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/481b1a9abb6d3228c194e899d573a2ca6a9602a9.webm', 65, 12),
('Caitlyn', 'Caitlyn', 'Piltover', 'Marksman', 'the Sheriff of Piltover', 'To be the best hunter, you have to be able to think like your prey.', 'Renowned as its finest peacekeeper, Caitlyn is also Piltover’s best shot at ridding the city of its elusive criminal elements. She is often paired with Vi, acting as a cool counterpoint to her partner’s more impetuous nature. Even though she carries a one-of-a-kind hextech rifle, Caitlyn’s most powerful weapon is her superior intellect, allowing her to lay elaborate traps for any lawbreakers foolish enough to operate in the City of Progress.', 'Splash_Art/Caitlyn_0.jpg', '', 84, 1),
('Camille', 'Camille', 'Piltover', 'Fighter', 'the Steel Shadow', 'Precision is the difference between a butcher and a surgeon.', ' Weaponized to operate outside the boundaries of the law, Camille is the Principal Intelligencer of Clan Ferros—an elegant and elite agent who ensures the Piltover machine and its Zaunite underbelly run smoothly. Adaptable and precise, she views sloppy technique as an embarrassment that must be put to order. With a mind as sharp as the blades she bears, Camille\'s pursuit of superiority through hextech body augmentation has left many to wonder if she is now more machine than human.', 'Splash_Art/Camille_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/4eff0baf3549e977e23969cdab560b1e9a26123f.webm', 95, 1),
('Cassiopeia', 'Cassiopeia', 'Noxus', 'Mage', 'the Serpent\'s Embrace', 'Secrets are sharper than blades…', 'Cassiopeia is a deadly creature bent on manipulating others to her will. Youngest and most beautiful daughter of the noble Du Couteau family of Noxus, she ventured deep into the crypts beneath Shurima in search of ancient power. There, she was bitten by a gruesome tomb guardian, whose venom transformed her into a viper-like predator. Cunning and agile, Cassiopeia now slithers under the veil of night, petrifying her enemies with her baleful gaze.', 'Splash_Art/Cassiopeia_0.jpg', '', 70, 8),
('ChoGath', 'Cho\'Gath', 'The_Void', 'Tank', 'the Terror of the Void', 'Your souls will feed the Void!', 'From the moment Cho’Gath first emerged into the harsh light of Runeterra’s sun, the beast was driven by the most pure and insatiable hunger. A perfect expression of the Void’s desire to consume all life, Cho’Gath’s complex biology quickly converts matter into new bodily growth—increasing its muscle mass and density, or hardening its outer carapace like organic diamond. When growing larger does not suit the Void-spawn’s needs, it vomits out the excess material as razor-sharp spines, leaving prey skewered and ready to feast upon later.', 'Splash_Art/ChoGath_0.jpg', '', 59, 27),
('Diana', 'Diana', 'Targon', 'Fighter', 'Scorn of the Moon', 'I am the light coursing in the soul of the moon.', 'Bearing her crescent moonblade and clad in shimmering armor the color of winter snow at night, Diana is a living embodiment of the silver moon’s power. Imbued with the essence of an Aspect from beyond Targon’s towering summit, Diana is no longer wholly human, and struggles to understand her power and purpose in this world.', 'Splash_Art/Diana_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/e45ef4c6ec195042d82ca53cfce2ff4cc93bdf74.webm', 78, 33),
('Elise', 'Elise', 'Shadow_Isles', 'Mage', 'the Spider Queen', 'Beauty is power too, and can strike swifter than any sword.', 'Elise is a deadly predator who dwells in a shuttered, lightless palace, deep within the oldest city of Noxus. She was once the mistress of a powerful noble house, until the bite of a vile spider-god transformed her into something utterly inhuman, yet still beautiful—an arachnoid creature, drawing unsuspecting prey into her web. Elise now feeds upon the naive and the faithless, and there are few who can resist her seductions.', 'Splash_Art/Elise_0.jpg', '', 83, 14),
('Evelynn', 'Evelynn', 'Runeterra', 'Assassin', 'Agony\'s Embrace', 'You know you want me.', ' Within the dark seams of Runeterra, the demon Evelynn searches for her next victim. She lures in prey with the voluptuous façade of a human female, but once a person succumbs to her charms, Evelynn’s true form is unleashed. She then subjects her victim to unspeakable torment, gratifying herself with their pain. To the demon, these liaisons are innocent flings. To the rest of Runeterra, they are ghoulish tales of lust gone awry and horrific reminders of the cost of wanton desire.', 'Splash_Art/Evelynn_0.jpg', '', 51, 12),
('Fiora', 'Fiora', 'Demacia', 'Fighter', 'the Grand Duelist', 'I have come to kill you for the sake of honor. And though you possess none, still you die.', 'The most feared duelist in all Valoran, Fiora is as renowned for her brusque manner and political cunning as she is for the speed of her rapier. Born to the noble Laurent family in Demacia, Fiora claimed the household from her father in the wake of a scandal that nearly destroyed them—now she is dedicated to restoring the Laurents to their rightful place among the great and good of the kingdom.', 'Splash_Art/Fiora_0.jpg', '', 71, 0),
('Irelia', 'Irelia', 'Ionia', 'Fighter', 'the Blade Dancer', 'Fight for the First Lands!', ' The Noxian occupation of Ionia produced many heroes, none more unlikely than young Irelia of Navori. Trained in the ancient dances of her province, she adapted her art for war, using the graceful and carefully practised movements to levitate a host of deadly blades. After proving herself as a fighter, she was thrust into the role of resistance leader and figurehead, and to this day remains dedicated to the preservation of her homeland.', 'Splash_Art/Irelia_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/03cc763c5e5a5914e4de4f5598abe1b8cc99adeb.webm', 50, 12),
('Janna', 'Janna', 'Zaun', 'Support', 'the Storm\'s Fury', 'The tempest is at your command.', ' An ancient and mysterious wind spirit, Janna has come to protect the dispossessed of Zaun. While her presence is most often felt as a soothing breeze or a ferocious tempest, she also can manifest in corporeal form as an ethereal figure, comforting the downtrodden. Over the eons, Janna has witnessed the rise and fall of civilizations. Through it all, she remains steadfast as a beacon of hope to those in need.', 'Splash_Art/Janna_0.jpg', '', 92, 21),
('Jhin', 'Jhin', 'Ionia', 'Marksman', 'the Virtuoso', 'In carnage, I bloom, like a flower in the dawn.', ' Jhin is a meticulous criminal psychopath who believes murder is art. Once an Ionian prisoner, but freed by shadowy elements within Ionia’s ruling council, the serial killer now works as their cabal\'s assassin. Using his gun as his paintbrush, Jhin creates works of artistic brutality, horrifying victims and onlookers. He gains a cruel pleasure from putting on his gruesome theater, making him the ideal choice to send the most powerful of messages: terror.', 'Splash_Art/Jhin_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/20a1802bcbb42e21ae66152dffa25671d3b924b7.webm', 64, 0),
('KaiSa', 'Kai\'Sa', 'The_Void', 'Marksman', 'Daughter of the Void', 'My appearance may frighten you, but make no mistake—I am on your side, and we fight to the bitter en', 'Claimed by the Void when she was only a child, Kai’Sa managed to survive through sheer tenacity and strength of will. Her experiences have made her a deadly hunter and, to some, the harbinger of a future they would rather not live to see. Having entered into an uneasy symbiosis with a living Void carapace, the time will soon come when she must decide whether to forgive those mortals who would call her a monster, and defeat the coming darkness together… or simply to forget, as the Void consumes the world that left her behind.', 'Splash_Art/KaiSa_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/aae82f09c0b6efdb47f0f6a58afbf2bdae3595e1.webm', 49, 18),
('Karma', 'Karma', 'Ionia', 'Mage', 'the Enlightened One', 'As Ionia changes, so must I.', ' No mortal exemplifies the spiritual traditions of Ionia more than Karma. She is the living embodiment of an ancient soul reincarnated countless times, carrying all her accumulated memories into each new life, and blessed with power that few can comprehend. She has done her best to guide her people in recent times of crisis, though she knows that peace and harmony may come only at a considerable cost—both to her, and to the land she holds most dear.', 'Splash_Art/Karma_0.jpg', '', 84, 2),
('Katarina', 'Katarina', 'Noxus', 'Assassin', 'the Sinister Blade', 'Violence solves everything.', 'Decisive in judgment and lethal in combat, Katarina is a Noxian assassin of the highest caliber. Eldest daughter to the legendary General Du Couteau, she made her talents known with swift kills against unsuspecting enemies. Her fiery ambition has driven her to pursue heavily-guarded targets, even at the risk of endangering her allies—but no matter the mission, Katarina will not hesitate to execute her duty amid a whirlwind of serrated daggers.', 'Splash_Art/Katarina_0.jpg', '', 68, 50),
('Kayle', 'Kayle', 'Demacia', 'Fighter', 'The Righteous', 'No human is perfect. But I am not human.', 'Born to a Targonian Aspect at the height of the Rune Wars, Kayle honored her mother’s legacy by fighting for justice on wings of divine flame. She and her twin sister Morgana were the protectors of Demacia for many years—until Kayle became disillusioned with the repeated failings of mortals, and abandoned this realm altogether. Still, legends are told of her punishing the unjust with her fiery swords, and many hope that she will one day return…', 'Splash_Art/Kayle_0.jpg', '', 11, 49),
('Kayn', 'Kayn', 'Ionia', 'Assassin', 'the Shadow Reaper', 'Will you prove worthy? - Probably not.', 'Apeerless practitioner of lethal shadow magic, Shieda Kayn battles to achieve his true destiny—to one day lead the Order of Shadow into a new era of Ionian supremacy. He wields the sentient darkin weapon Rhaast, undeterred by its creeping corruption of his body and mind. There are only two possible outcomes: either Kayn bends the weapon to his will... or the malevolent blade consumes him completely, paving the way for the destruction of all Runeterra.', 'Splash_Art/Kayn_0.jpg', '', 51, 51),
('KogMaw', 'Kog\'Maw', 'The_Void', 'Marksman', 'the Mouth of the Abyss', 'If that\'s just hungry, I don\'t want to see angry.', 'Belched forth from a rotting Void incursion deep in the wastelands of Icathia, Kog’Maw is an inquisitive yet putrid creature with a caustic, gaping mouth. This particular Void-spawn needs to gnaw and drool on anything within reach to truly understand it. Though not inherently evil, Kog’Maw’s beguiling naiveté is dangerous, as it often precedes a feeding frenzy—not for sustenance, but to satisfy its unending curiosity.', 'Splash_Art/KogMaw_0.jpg', '', 73, 68),
('LeBlanc', 'LeBlanc', 'Noxus', 'Assassin', 'the Deceiver', 'A rose cannot grow in darkness. It dies, and the darkness grows…', 'Mysterious even to other members of the Black Rose cabal, LeBlanc is but one of many names for a pale woman who has manipulated people and events since the earliest days of Noxus. Using her magic to mirror herself, the sorceress can appear to anyone, anywhere, and even be in many places at once. Always plotting just out of sight, LeBlanc’s true motives are as inscrutable as her shifting identity.', 'Splash_Art/LeBlanc_0.jpg', '', 77, 0),
('Leona', 'Leona', 'Targon', 'Tank', 'the Radiant Dawn', 'By the light of the Sun, the world is beheld.', ' Imbued with the fire of the sun, Leona is a holy warrior of the Solari who defends Mount Targon with her Zenith Blade and the Shield of Daybreak. Her skin shimmers with starfire while her eyes burn with the power of the celestial Aspect within her. Armored in gold and bearing a terrible burden of ancient knowledge, Leona brings enlightenment to some, death to others.', 'Splash_Art/Leona_0.jpg', '', 87, 6),
('Lillia', 'Lillia', 'Ionia', 'Mage', 'the Bashful Bloom', 'When the humans bloom, it’s so beautiful… I can help them! Maybe. Possibly? Perhaps…', 'Intensely shy, the fae fawn Lillia skittishly wanders Ionia’s forests. Hiding just out of sight of mortals—whose mysterious natures have long captivated, but intimidated, her—Lillia hopes to discover why their dreams no longer reach the ancient Dreaming Tree. She now travels Ionia with a magical branch in hand, in an effort to find people’s unrealized dreams. Only then can Lillia herself bloom and help others untangle their fears to find the sparkle within. Eep!', 'Splash_Art/Lillia_0.jpg', '', 45, 21),
('Lissandra', 'Lissandra', 'The_Freljord', 'Mage', 'the Ice Witch', 'So many secrets, buried in ice...', 'As the reclusive leader of the Frostguard, many believe Lissandra is a living saint whose followers bring healing and wisdom to the tribes of the Freljord. The truth is perhaps more sinister, as she uses her elemental magic to twist the power of True Ice into something dark and terrible, entombing or impaling any who would reveal her deepest secrets. Indeed, the legacy of her past may yet be the beginning of the end for Runeterra.', 'Splash_Art/Lissandra_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/1b9c8895ce26e74dca730702c72c6ce05003d8eb.webm', 77, 0),
('Lux', 'Lux', 'Demacia', 'Mage', 'the Lady of Luminosity', 'The light inside is what makes me different, and I’m always careful where I shine it.', 'Luxanna Crownguard hails from Demacia, an insular realm where magical abilities are viewed with fear and suspicion. Able to bend light to her will, she grew up dreading discovery and exile, and was forced to keep her power secret in order to preserve her family’s noble status. Nonetheless, Lux’s optimism and resilience have led her to embrace her unique talents, and she now seeks to bring greater tolerance and understanding to her homeland.', 'Splash_Art/Lux_0.jpg', '', 66, 7),
('Miss_Fortune', 'Miss Fortune', 'Bilgewater', 'Marksman', 'the Bounty Hunter', 'Fortune doesn\'t favor fools.', 'ABilgewater captain famed for her looks but feared for her ruthlessness, Sarah Fortune paints a stark figure among the hardened criminals of the port city. As a child, she witnessed the reaver king Gangplank murder her family—an act she brutally avenged years later, blowing up his flagship while he was still aboard. Those who underestimate her will face a beguiling and unpredictable opponent… and, likely, a bullet or two in their guts.', 'Splash_Art/Miss_Fortune_0.jpg', '', 81, 32),
('Morgana', 'Morgana', 'Demacia', 'Mage', 'The Fallen', 'Only those you love can break your heart.', 'Conflicted between her celestial and mortal natures, Morgana bound her wings to embrace humanity, and inflicts her pain and bitterness upon the dishonest and the corrupt. She rejects laws and traditions she believes are unjust, and fights for truth from the shadows of Demacia—even as others seek to repress it—by casting shields and chains of dark fire. More than anything else, Morgana truly believes that even the banished and outcast may one day rise again.', 'Splash_Art/Morgana_0.jpg', '', 89, 49),
('Nami', 'Nami', 'Runeterra', 'Support', 'the Tidecaller', 'I decide what the tide will bring.', 'Aheadstrong young vastaya of the seas, Nami was the first of the Marai tribe to leave the waves and venture onto dry land, when their ancient accord with the Targonians was broken. With no other option, she took it upon herself to complete the sacred ritual that would ensure the safety of her people. Amidst the chaos of this new age, Nami faces an uncertain future with grit and determination, using her Tidecaller staff to summon the strength of the oceans themselves.', 'Splash_Art/Nami_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/eee325cd231728fe0639a9ced9d77532a12db909.webm', 91, 15),
('Nautilus', 'Nautilus', 'Bilgewater', 'Tank', 'the Titan of the Depths', 'When consumed by utter darkness, there is nothing left but forward.', ' Alonely legend as old as the first piers sunk in Bilgewater, the armored goliath known as Nautilus roams the dark waters off the coast of the Blue Flame Isles. Driven by a forgotten betrayal, he strikes without warning, swinging his enormous anchor to save the wretched, and drag the greedy to their doom. It is said he comes for those who forget to pay the “Bilgewater tithe”, pulling them down beneath the waves with him—an iron-clad reminder that none can escape the depths.', 'Splash_Art/Nautilus_0.jpg', '', 88, 1),
('Neeko', 'Neeko', 'Ixtal', 'Mage', 'the Curious Chameleon', 'The Oovi-Kat are gone. Neeko must build her own tribe, now.', 'Hailing from a long lost tribe of vastaya, Neeko can blend into any crowd by borrowing the appearances of others, even absorbing something of their emotional state to tell friend from foe in an instant. No one is ever sure where—or who—Neeko might be, but those who intend to do her harm will soon witness her true colors revealed, and feel the full power of her primordial spirit magic unleashed upon them.', 'Splash_Art/Neeko_0.jpg', '', 44, 2),
('Nidalee', 'Nidalee', 'Ixtal', 'Mage', 'the Bestial Huntress', 'The untamed know no fear.', 'Raised in the deepest wilderness, Nidalee is a master tracker who can shapeshift into a ferocious pakaa jungle cat at will. Neither wholly woman nor beast, she viciously defends her territory from any and all trespassers, with carefully placed traps and deft spear throws. She cripples her quarry before pouncing on them in feline form—the lucky few who survive tell tales of a wild woman with razor-sharp instincts, and even sharper claws...', 'Splash_Art/Nidalee_0.jpg', '', 84, 2),
('Nilah', 'Nilah', 'Bilgewater', 'Marksman', 'the Joy Unbound', 'Bliss in life, and bliss forever after.', 'Nilah is an ascetic warrior from a distant land, seeking the world’s deadliest, most titanic opponents so that she might challenge and destroy them. Having won her power through an encounter with the long-imprisoned demon of joy, she has no emotions other than unceasing jubilation—a small price to pay for the vast strength she now possesses. Channeling the demon’s liquid form into a blade of unparalleled might, she stands defiant against ancient threats long forgotten.', 'Splash_Art/Nilah_0.jpg', '', 68, 28),
('Orianna', 'Orianna', 'Piltover', 'Mage', 'the Lady of Clockwork', 'When a moth emerges from its chrysalis, does it remember its life as a caterpillar?', 'Once a curious girl of flesh and blood, Orianna is now a technological marvel composed entirely of clockwork. She became gravely ill after an accident in the lower districts of Zaun, and her failing body had to be replaced with exquisite artifice, piece by piece. Accompanied by the extraordinary brass orb that houses her hextech arsenal, Orianna is now free to explore the wonders of Piltover, and beyond.', 'Splash_Art/Orianna_0.jpg', '', 80, 0),
('Qiyana', 'Qiyana', 'Ixtal', 'Assassin', 'The Empress of Elements', 'Some day, all this will be Ixaocan. A glorious empire, with an empress to fit.', 'In the jungle city of Ixaocan, Qiyana plots her own ruthless path to the high seat of the Yun Tal. Last in line to succeed her parents, she faces those who stand in her way with brash confidence and unprecedented mastery over elemental magic. With the land itself obeying her every command, Qiyana sees herself as the greatest elementalist in the history of Ixaocan—and by that right, deserving of not only a city, but an empire.', 'Splash_Art/Qiyana_0.jpg', '', 51, 23),
('Quinn', 'Quinn', 'Demacia', 'Marksman', 'Demacia\'s Wings', 'Most soldiers only rely on their weapons. Few truly rely on each other.', ' Sponsored by the noble Buvelle family, Quinn is a ranger-knight of Demacia who undertakes dangerous missions deep in enemy territory. She and her legendary eagle, Valor, share an unbreakable bond, and their foes are often slain before they realize they are fighting not one, but two of the kingdom’s greatest heroes. Nimble and acrobatic, Quinn takes aim with her crossbow while Valor marks their elusive targets from above, making them a deadly pair on the battlefield.', 'Splash_Art/Quinn_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/183765feb69482fa1ff8c0a752ddfe22030084c5.webm', 66, 0),
('Rakan', 'Rakan', 'Ionia', 'Support', 'the Charmer', 'Why do you never say yes?', ' As mercurial as he is charming, Rakan is an infamous vastayan troublemaker and the greatest battle-dancer in Lhotlan tribal history. To the humans of the Ionian highlands, his name had long been synonymous with wild festivals, uncontrollable parties, and anarchic music. But this energetic, traveling showman has left his old life behind, dedicating himself to the cause of his lover, the rebel Xayah. Together, they seek to free Ionia’s wild magic, restoring the vastaya’s birthright.', 'Splash_Art/Rakan_Xayah_0.jpg', '', 41, 10),
('Rell', 'Rell', 'Noxus', 'Support', 'the Iron Maiden', 'Forge your heart into something strong. Unbreakable.', ' The product of brutal experimentation at the hands of the Black Rose, Rell is a defiant, living weapon determined to topple Noxus. Her childhood was one of misery and horror, enduring unspeakable procedures to perfect and weaponize her magical control over metal... until she made a violent escape, killing many of her captors in the process. Now branded as a criminal, Rell attacks Noxian soldiers on sight as she searches for survivors of her old “academy”, defending the meek while delivering merciless death to her former instructors.', 'Splash_Art/Rell_0.jpg', '', 49, 13),
('Renata_Glasc', 'Renata_Glasc', 'Zaun', 'Support', 'the Chem-Baroness', 'We don\'t have to be enemies. Let me change your mind.', 'Renata Glasc rose from the ashes of her childhood home with nothing but her name and her parents’ alchemical research. In the decades since, she has become Zaun’s wealthiest chem-baron, a business magnate who built her power by tying everyone’s interests to her own. Work with her, and be rewarded beyond measure. Work against her, and live to regret it. But everyone comes to her side, eventually.', 'Splash_Art/Renata_Glasc_0.jpg', '', 54, 14),
('Rengar', 'Rengar', 'Ixtal', 'Assassin', 'the Pridestalker', 'Prey on the weak and you may survive. Prey on the strong and you will truly live.', 'Rengar is a ferocious vastayan trophy hunter who lives for the thrill of tracking down and killing dangerous creatures. He scours the world for the most fearsome beasts he can find, especially seeking any trace of Kha’Zix, the void creature who scratched out his eye. Rengar stalks his prey neither for food nor glory, but for the sheer beauty of the pursuit.', 'Splash_Art/Rengar_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/1d6b5b19b0a0c99fae110db5a04aa46ff3b29baf.webm', 74, 20),
('Riven', 'Riven', 'Noxus', 'Fighter', 'the Exile', 'A warrior’s blade reflects the truth in their heart. Mine is black, and broken.', 'Once a swordmaster in the warhosts of Noxus, Riven rose through the ranks on the strength of her conviction and brutal efficiency, and was rewarded with a legendary runic blade and a warband of her own. However, on the Ionian front, Riven’s faith in her nation was tested and ultimately broken. She severed all ties to the empire, seeking to find her place in a shattered world, even as rumors abounded that Noxus had been reforged. Now forced to return in chains, she faces the judgment of her former homeland...', 'Splash_Art/Riven_0.jpg', '', 86, 0),
('Samira', 'Samira', 'Noxus', 'Marksman', 'the Desert Rose', 'Virtues, I\'ve got a few. Vices, a few more.', ' Samira stares death in the eye with unyielding confidence, seeking thrill wherever she goes. After her Shuriman home was destroyed as a child, Samira found her true calling in Noxus, where she built a reputation as a stylish daredevil taking on dangerous missions of the highest caliber. Wielding black-powder pistols and a custom-engineered blade, Samira thrives in life-or-death circumstances, eliminating any who stand in her way with flash and flair.', 'Splash_Art/Samira_0.jpg', '', 59, 2),
('Sejuani', 'Sejuani', 'The_Freljord', 'Tank', 'the Winter\'s Wrath', 'I was cut from the ice. Shaped by the storms. Hardened in the cold.', 'Sejuani is the brutal, unforgiving Warmother of the Winter’s Claw, one of the most feared tribes of the Freljord. Her people’s survival is a constant, desperate battle against the elements, forcing them to raid Noxians, Demacians, and Avarosans alike to survive the harsh winters. Sejuani herself spearheads the most dangerous of these attacks from the saddle of her drüvask boar Bristle, using her True Ice flail to freeze and shatter her enemies.', 'Splash_Art/Sejuani_0.jpg', '', 61, 0),
('Senna', 'Senna', 'Runeterra', 'Support', 'the Redeemer', 'As shadows embrace the light, I will embrace them...', 'Cursed from childhood to be haunted by the supernatural Black Mist, Senna joined a sacred order known as the Sentinels of Light, and fiercely fought back—only to be killed, her soul imprisoned in a lantern by the cruel wraith Thresh. But refusing to lose hope, within the lantern Senna learned to use the Mist, and reemerged to new life, forever changed. Now wielding darkness along with light, Senna seeks to end the Black Mist by turning it against itself—with every blast of her relic weapon, redeeming the souls lost within.', 'Splash_Art/Senna_0.jpg', '', 58, 11),
('Seraphine', 'Seraphine', 'Piltover', 'Support', 'the Starry-Eyed Songstress', 'This one’s for you!', 'Born in Piltover to Zaunite parents, Seraphine can hear the souls of others—the world sings to her, and she sings back. Though these sounds overwhelmed her in her youth, she now draws on them for inspiration, turning the chaos into a symphony. She performs for the sister cities to remind their citizens that they’re not alone, that they’re stronger together, and that, in her eyes, their potential is limitless.', 'Splash_Art/Seraphine_0.jpg', '', 42, 19),
('Sett', 'Sett', 'Ionia', 'Fighter', 'the Boss', 'The boss is here. Hold your applause... seriously, be quiet.', ' Aleader of Ionia’s growing criminal underworld, Sett rose to prominence in the wake of the war with Noxus. Though he began as a humble challenger in the fighting pits of Navori, he quickly gained notoriety for his savage strength, and his ability to take seemingly endless amounts of punishment. Now, having climbed through the ranks of local combatants, Sett has muscled to the top, reigning over the pits he once fought in.', 'Splash_Art/Sett_0.jpg', '', 49, 9),
('Shyvana', 'Shyvana', 'Demacia', 'Fighter', 'the Half-Dragon', 'I am of two worlds, yet I belong to neither.', ' Shyvana is a creature with pure elemental magic blazing in her heart. Though she most often appears humanoid, she can take her true form when necessary—that of a fearsome dragon, incinerating her foes with fiery breath. Having saved the life of the crown prince Jarvan IV, Shyvana now serves uneasily in his royal guard, struggling to find acceptance among the suspicious people of Demacia.', 'Splash_Art/Shyvana_0.jpg', '', 78, 0),
('Sivir', 'Sivir', 'Shurima', 'Marksman', 'the Battle Mistress', 'Coin may buy you skill for a day, but never loyalty.', 'Sivir is a renowned mercenary captain who plies her trade in the deserts of Shurima. Armed with her legendary jeweled crossblade, she has fought and won countless battles for those who can afford her services, and prides herself on recovering lost treasures from the catacombs beneath the old empire—for a generous share of the profits, of course. With ancient forces stirring the very bones of Shurima, Sivir now finds herself torn between conflicting destinies…', 'Splash_Art/Sivir_0.jpg', '', 61, 15),
('Sona', 'Sona', 'Demacia', 'Support', 'Maven of the Strings', 'What masterpiece shall we play today?', 'Sona is a virtuoso of the stringed etwahl, speaking only through her graceful chords and vibrant arias. Her genteel manner has endeared her to the Demacian nobility, though some speculate her arresting melodies actually emanate magic—a dangerous prospect in the kingdom. Silent to outsiders but understood easily enough by close companions, Sona plucks her harmonies not only to soothe injured allies, but also to strike down unsuspecting enemies.', 'Splash_Art/Sona_0.jpg', '', 77, 0),
('Soraka', 'Soraka', 'Targon', 'Support', 'the Starchild', 'Two paths lie before you, but you can only take one.', ' Awanderer from the celestial realm, Soraka gave up her immortal form to protect the mortal races from their own ignorance and violent instincts. She endeavors to spread the virtues of compassion and mercy to everyone she meets—guiding the lost, and healing the wounded. For all Soraka has seen of this world\'s struggles, she still believes the people of Runeterra have yet to reach their full potential.', 'Splash_Art/Soraka_0.jpg', '', 57, 0),
('Syndra', 'Syndra', 'Ionia', 'Mage', 'the Dark Sovereign', 'My potential is limitless. I will not be restrained.', ' Syndra is a fearsome Ionian mage with incredible power at her command. As a child, she disturbed the village elders with her reckless and wild magic. She was sent away to be taught greater control, but eventually discovered her supposed mentor was restraining her abilities. Forming her feelings of betrayal and hurt into dark spheres of energy, Syndra has sworn to destroy all who would try to control her.', 'Splash_Art/Syndra_0.jpg', '', 53, 10),
('Tahm_Kench', 'Tahm Kench', 'Bilgewater', 'Tank', 'the River King', 'The whole world\'s a river, and I\'m its king.', ' Known by many names throughout history, the demon Tahm Kench travels the waterways of Runeterra, feeding his insatiable appetite with the misery of others. Though he may appear singularly charming and proud, he swaggers through the physical realm like a vagabond in search of unsuspecting prey. His lashing tongue can stun even a heavily armored warrior from a dozen paces, and to fall into his rumbling belly is to tumble into an abyss from which there is little hope of return.', 'Splash_Art/Tahm_Kench_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/880b15d0864666f1e5876c445b0001ec5e46cc89.webm', 84, 47),
('Taliyah', 'Taliyah', 'Shurima', 'Mage', 'the Stoneweaver', 'This world is a tapestry of our own making.', 'Taliyah is a nomadic mage from Shurima, torn between teenage wonder and adult responsibility. She has crossed nearly all of Valoran on a journey to learn the true nature of her growing powers, though more recently she has returned to protect her tribe. Some have mistaken her compassion for weakness and paid the ultimate price—for beneath Taliyah’s youthful demeanor is a will strong enough to move mountains, and a spirit fierce enough to make the earth itself tremble.', 'Splash_Art/Taliyah_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/05cbd428b79d72c57fbbffe976461eb66e23af40.webm', 87, 0),
('Vayne', 'Vayne', 'Demacia', 'Marksman', 'the Night Hunter', 'I don’t kill creatures like you because it’s the right thing to do. I kill you because I enjoy it.', 'Shauna Vayne is a deadly, remorseless Demacian monster hunter, who has dedicated her life to finding and destroying the demon that murdered her family. Armed with a wrist-mounted crossbow and a heart full of vengeance, she is only truly happy when slaying practitioners or creations of the dark arts, striking from the shadows with a flurry of silver bolts.', 'Splash_Art/Vayne_0.jpg', '', 92, 11),
('Viego', 'Viego', 'Shadow_Isles', 'Fighter', 'the Ruined King', 'No price is too great. No atrocity beyond my reach. For her... I will do anything.', 'Once ruler of a long-lost kingdom, Viego perished over a thousand years ago when his attempt to bring his wife back from the dead triggered the magical catastrophe known as the Ruination. Transformed into a powerful, unliving wraith tortured by an obsessive longing for his centuries-dead queen, Viego now stands as the Ruined King, controlling the deadly Harrowings as he scours Runeterra for anything that might one day restore her, and destroying all in his path as the Black Mist pours endlessly from his cruel, broken heart.', 'Splash_Art/Viego_0.jpg', '', 75, 18),
('Volibear', 'Volibear', 'The_Freljord', 'Fighter', 'the Relentless Storm', 'They have forgotten the old ways. The old ways have not forgotten them.', 'To those who still revere him, the Volibear is the storm made manifest. Destructive, wild, and stubbornly resolute, he existed before mortals walked the Freljord’s tundra, and is fiercely protective of the lands that he and his demi-god kin created. Cultivating a deep hatred of civilization and the weakness it brought with it, he now fights to return to the old ways—when the land was untamed, and blood spilled freely—and eagerly battles all who oppose him, with tooth, claw, and thundering domination.', 'Splash_Art/Volibear_0.jpg', '', 58, 4),
('Xayah', 'Xayah', 'Ionia', 'Marksman', 'the Rebel', 'Cause then... I wouldn\'t get to hear you ask.', 'Deadly and precise, Xayah is a vastayan revolutionary waging a personal war to save her people. She uses her speed, guile, and razor-sharp feather blades to cut down anyone who stands in her way. Xayah fights alongside her partner and lover, Rakan, to protect their dwindling tribe, and restore their race to her vision of its former glory.', 'Splash_Art/Rakan_Xayah_0.jpg', '', 69, 24),
('Yasuo', 'Yasuo', 'Ionia', 'Fighter', 'the Unforgiven', 'Death is like the wind—always by my side.', ' An Ionian of deep resolve, Yasuo is an agile swordsman who wields the air itself against his enemies. As a proud young man, he was falsely accused of murdering his master—unable to prove his innocence, he was forced to slay his own brother in self-defense. In time, his master’s true killer was revealed, and his brother mysteriously returned from death, yet Yasuo still could not forgive himself for all he had done. Now, he wanders the world with only the wind to guide his blade.', 'Splash_Art/Yasuo_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/64bf102eba34a29dfe59d0595f916a0848753141.webm', 88, 31),
('Zed', 'Zed', 'Ionia', 'Assassin', 'the Master of Shadows', 'The unseen blade is the deadliest.', 'Utterly ruthless and without mercy, Zed is the leader of the Order of Shadow, an organization he created with the intent of militarizing Ionia’s magical and martial traditions to drive out Noxian invaders. During the war, desperation led him to unlock the secret shadow form—a malevolent spirit magic as dangerous and corrupting as it is powerful. Zed has mastered all of these forbidden techniques to destroy anything he sees as a threat to his nation, or his new order.', 'Splash_Art/Zed_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/5cb0965af44636e26e714ab08e77689950689f8c.webm', 76, 3),
('Zeri', 'Zeri', 'Zaun', 'Marksman', 'the Spark of Zaun', 'I belong here. We all belong here.', 'Aheadstrong, spirited young woman from Zaun’s working-class, Zeri channels her electric magic to charge herself and her custom-crafted gun. Her volatile power mirrors her emotions, its sparks reflecting her lightning-fast approach to life. Deeply compassionate toward others, Zeri carries the love of her family and her home into every fight. Though her eagerness to help can sometimes backfire, Zeri believes one truth to be certain: stand up for your community, and it will stand up with you.', 'Splash_Art/Zeri_0.jpg', '', 57, 28),
('Zyra', 'Zyra', 'Ixtal', 'Mage', 'Rise of the Thorns', 'Where are your friends? Mine are all around…', ' Born in an ancient, sorcerous catastrophe, Zyra is the wrath of nature given form—an alluring hybrid of plant and human, kindling new life with every step. She views the many mortals of Valoran as little more than prey for her seeded progeny, and thinks nothing of slaying them with flurries of deadly spines. Though her true purpose has not been revealed, Zyra wanders the world, indulging her most primal urges to colonize, and strangle all other life from it.', 'Splash_Art/Zyra_0.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/374f35f73d16ac029e6f67b3c399f8094d92109b.webm', 88, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `regions`
--

CREATE TABLE `regions` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `story` varchar(1000) DEFAULT NULL,
  `icon` text NOT NULL,
  `avatar` text NOT NULL,
  `background` text NOT NULL,
  `animated_background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `regions`
--

INSERT INTO `regions` (`id`, `name`, `story`, `icon`, `avatar`, `background`, `animated_background`) VALUES
('Bandle_City', 'Bandle City', 'Opinions differ as to where exactly the home of the yordles is to be found, though a handful of mortals claim to have traveled unseen pathways to a land of curious enchantment beyond the material realm. They tell of a place of unfettered magic, where the foolhardy can be led astray by myriad wonders, and end up lost in a dream... In Bandle City, it is said that every sensation is heightened for non-yordles. Colors are brighter. Food and drink intoxicates the senses for years and, once tasted, will never be forgotten. The sunlight is eternally golden, the waters crystal clear, and every harvest brings a fruitful bounty. Perhaps some of these claims are true, or maybe none—for no two taletellers ever seem to agree on what they actually saw.  Only one thing is known for certain, and that is the timeless quality of Bandle City and its inhabitants. This might explain why those mortals who find their way back often appear to have aged tremendously, while many more never return at all.', 'Icon/bandle_city_crest_icon.png', 'Icon/bandle_city_emblem.png', 'Regions/bandle_city_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/84d14187e66ee28277609d55a3db93b96ae2a34c.webm'),
('Bilgewater', 'Bilgewater', 'Nestled away in the Blue Flame Isles archipelago, Bilgewater is a port city like no other—home to serpent hunters, dock gangs, and smugglers from across the known world. Here, fortunes are made and ambitions shattered in the blink of an eye. For those fleeing justice, debt, or persecution, Bilgewater can be a place of new beginnings, for no one on these twisted streets cares about your past. Even so, with each new dawn, careless travelers can always be found floating in the harbor, their purses empty and their throats slit…  While incredibly dangerous, Bilgewater is ripe with opportunity, free from the shackles of formal government and trade regulation. If you have the coin, almost anything can be purchased here, from outlawed hextech to the favor of local crime lords.  With the recent removal of the last “reaver king” of Bilgewater, the city has entered a period of transition, while the most prominent captains try to agree on its future. But as long as there are seaworthy ships and cr', 'Icon/bilgewater_crest_icon.png', 'Icon/bilgewater_emblem.png', 'Regions/bilgewater_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/d9beea1a5d1cfc7ec6bbc100d3fb522175930f38.webm'),
('Demacia', 'Demacia', 'Astrong, lawful kingdom with a prestigious military history, Demacia’s people have always valued the ideals of justice, honor, and duty most highly, and are fiercely proud of their cultural heritage. But in spite of these lofty principles, this largely self-sufficient nation has grown more insular and isolationist in recent centuries.  Now, Demacia is a kingdom in turmoil.  The capital, the Great City of Demacia, was founded as a refuge from sorcery after the nightmare of the Rune Wars, and built upon the riddle of petricite—a peculiar white stone that dampens magical energy. It is from here that the royal family has long seen to the defense of the outlying towns and villages, farmland, forests, and mountains rich with mineral resources.  However, following the sudden death of King Jarvan III, the other noble families have not yet approved the succession of his sole heir, young Prince Jarvan, to the throne.  Those who dwell beyond the heavily guarded borders are increasingly viewed wit', 'Icon/demacia_crest_icon.png', 'Icon/demacia_emblem.png', 'Regions/demacia_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/36c564338d66ac2000a3d6c091dd78c443230623.webm'),
('Ionia', 'Ionia', 'Surrounded by treacherous seas, Ionia is composed of a number of allied provinces scattered across a massive archipelago, known to many as the First Lands. Since Ionian culture has long been shaped by the pursuit of balance in all things, the border between the material and spirit realms tends to be more permeable here, especially in the wild forests and mountains.  Although these lands’ enchantments can be fickle, its creatures dangerous and fae, for many centuries most Ionians led lives of plenty. The warrior monasteries, provincial militias—and even Ionia itself—had been enough to protect them.  But that ended twelve years ago, when Noxus attacked the First Lands. The empire’s seemingly endless warhosts savaged Ionia, and were only defeated after many years, and at great cost.  Now, Ionia exists in an uneasy peace. Different reactions to the war have divided the region—some groups, such as the Shojin monks or the Kinkou, seek a return to isolationist pacifism, and pastoral tradition', 'Icon/ionia_crest_icon.png', 'Icon/ionia_emblem.png', 'Regions/ionia_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/a9b6b551e2589189615eb4f7d56a17862ff3a882.webm'),
('Ixtal', 'Ixtal', 'Renowned for its mastery of elemental magic, Ixtal was one of the first independent nations to join the Shuriman empire. In truth, Ixtali culture is much older—part of the great westward diaspora that gave rise to civilizations including the Buhru, magnificent Helia, and the ascetics of Targon—and it is likely they played a significant role in the creation of the first Ascended.  But the mages of Ixtal survived the Void, and later the Darkin, by distancing themselves from their neighbors, drawing the wilderness around them like a shield. While much had already been lost, they were committed to the preservation of what little remained…  Now, secluded deep in the jungle for thousands of years, the sophisticated arcology-city of Ixaocan remains mostly free of outside influence. Having witnessed from afar the ruination of the Blessed Isles and the Rune Wars that followed, the Ixtali view all the other factions of Runeterra as upstarts and pretenders, and use their powerful magic to keep an', 'Icon/ixtal_crest_icon.png', 'Icon/ixtal_emblem.png', 'Regions/ixtal_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/670a63d489e907098afeafd2ce42a81e8e64bfcb.webm'),
('Noxus', 'Noxus', 'Noxus is a powerful empire with a fearsome reputation. To those beyond its borders, it is brutal, expansionist, and threatening, yet those who look past its warlike exterior see an unusually inclusive society, where the strengths and talents of its people are respected and cultivated.  The Noxii were once fierce barbarian tribes, until they stormed the ancient city that now lies at the heart of their domain. Under threat from all sides, they aggressively took the fight to their enemies, pushing their borders outward with each passing year. This struggle for survival has made modern Noxians a deeply proud people who value strength above all—though that strength can manifest in many different forms.  Anyone can rise to a position of power and respect within Noxus if they display the necessary aptitude, regardless of social standing, background, homeland, or wealth. Those who are able to wield magic are held in particularly high esteem, and are actively sought out in order that their spec', 'Icon/noxus_crest_icon.png', 'Icon/noxus_emblem.png', 'Regions/noxus_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/329c91313054076a869a6ceb95c995107320e334.webm'),
('Piltover', 'Piltover', 'Piltover is a thriving, progressive city whose power and influence is on the rise. It is Valoran’s cultural center, where art, craftsmanship, trade and innovation walk hand in hand. Its power comes not through military might, but the engines of commerce and forward thinking. Situated on the cliffs above the district of Zaun and overlooking the ocean, fleets of ships pass through its titanic sea-gates, bringing goods from all over the world. The wealth this generates has given rise to an unprecedented boom in the city’s growth. Piltover has - and still is - reinventing itself as a city where fortunes can be made and dreams can be lived. Burgeoning merchant clans fund development in the most incredible endeavors: grand artistic follies, esoteric hextech research, and architectural monuments to their power. With ever more inventors delving into the emergent lore of hextech, Piltover has become a lodestone for the most skilled craftsmen the world over.', 'Icon/piltover_crest_icon.png', 'Icon/piltover_emblem.png', 'Regions/piltover_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/2b8b859578a41fc8a9272dacc0bdd6405a248c10.webm'),
('Runeterra', 'Runeterra', NULL, 'Icon/runeterra_crest_icon.png', 'Icon/runeterra_crest_icon.png', '', ''),
('Shadow_Isles', 'Shadow Isles', 'This cursed land was once home to a noble, enlightened civilization, known to its allies and emissaries as the Blessed Isles. However, more than a thousand years ago, an unprecedented magical cataclysm left the barrier between the material and spirit realms in tatters, effectively merging the two… and dooming all living things in an instant.  Now, a malevolent Black Mist permanently shrouds the Isles, and the earth itself is tainted by dark sorcery. Mortals who dare to venture to these dismal shores will slowly have their life force stolen away from them, which in turn attracts the insatiable, restless spirits of the dead.  Those who perish within the Mist are condemned to haunt this nightmarish place for eternity—worse still, the power of the Shadow Isles appears to wax stronger with every passing year, allowing the most powerful specters to roam farther and farther across Runeterra.', 'Icon/shadow_isles_crest_icon.png', 'Icon/shadow_isles_emblem.png', 'Regions/shadow_isles_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/9648da1fe76a45096b7095940d7991269d97d351.webm'),
('Shurima', 'Shurima', 'The empire of Shurima was once a thriving civilization that spanned an entire continent. Forged in a bygone age by the mighty god-warriors of the Ascended Host, it united all the disparate peoples of the south, and enforced a lasting peace between them.  Few dared to rebel. Those that did, like the accursed nation of Icathia, were crushed without mercy.  However, after several thousand years of growth and prosperity, the failed Ascension of Shurima’s last emperor left the capital in ruins, and tales of the empire’s former glory became little more than myth. Now, most of the nomadic inhabitants of Shurima’s deserts eke out a meager existence from the unforgiving land. Some have built small outposts to defend the few oases, while others delve into long lost catacombs in search of the untold riches that must surely lay buried there. There are also those who live as mercenaries, taking coin for their service before disappearing back into the lawless wastelands.  Still, a handful dare to dr', 'Icon/shurima_crest_icon.png', 'Icon/shurima_emblem.png', 'Regions/shurima_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/903a0dc3286518114b68113d0778e5299a26a729.webm'),
('Targon', 'Targon', 'Mount Targon is the mightiest peak in Runeterra, a towering peak of sun-baked rock amid a range of summits unmatched in scale anywhere else in the world. Located far from civilization, Mount Targon is utterly remote and all but impossible to reach save by the most determined seeker. Many legends cling to Mount Targon, and, like any place of myth, it is a beacon to dreamers, madmen and questors of adventure. Some of these brave souls attempt to scale the impossible mountain, perhaps seeking wisdom or enlightenment, perhaps chasing glory or some soul-deep yearning to witness its summit. The ascent is all but impossible, and those hardy few who somehow survive to reach the top almost never speak of what they have seen. Some return with a haunted, empty look in their eyes, others changed beyond all recognition, imbued by an Aspect of unearthly, inhuman power with a destiny few mortals can comprehend.', 'Icon/targon_crest_icon.png', 'Icon/targon_emblem.png', 'Regions/targon_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/d00f9e798c7e63fed1eaa8b92770f280d0c7f241.webm'),
('The_Freljord', 'The Freljord', 'The Freljord is a harsh and unforgiving place—where the people are born warriors, who must persevere against all odds.  Proud and fiercely independent, the tribes of the Freljord are often considered wild, rugged, and “uncivilized” by their neighbors across Valoran, who do not know the ancient traditions that shaped them. Many thousands of years ago, the alliance between the sisters Avarosa, Serylda, and Lissandra was shattered in a war that unknowingly threatened all of Runeterra, plunging the northern lands into chaos, and near-constant winter. Now, only those truly exceptional mortals who seem immune to the ravages of fire or ice seem destined, or able, to lead.  Despite the best efforts of the Frostguard, myths and legends still endure of the old gods, the enigmatic yetis, and restless spirit walker shamans. The raiders of the Winter’s Claw range further with each passing year, harrying the borders of Demacia to the south, and the frontiers of Noxus to the east. Finally, seeking a ', 'Icon/the_freljord_crest_icon.png', 'Icon/the_freljord_emblem.png', 'Regions/the_freljord_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/aa302815ab40524f8382dbc9865d6cbd7df0b9f9.webm'),
('The_Void', 'The Void', 'Screaming into existence with the birth of the universe, the Void is a manifestation of the unknowable nothingness that lies beyond. It is a force of insatiable hunger, waiting through the eons until its masters, the mysterious Watchers, mark the final time of undoing.  To be a mortal touched by this power is to suffer an agonizing glimpse of eternal unreality, enough to shatter even the strongest mind. Denizens of the Void realm itself are construct-creatures, often of only limited sentience, but tasked with a singular purpose—to usher in total oblivion across Runeterra.', 'Icon/the_void_crest_icon.png', 'Icon/the_void_crest_icon.png', 'Regions/the_void_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/d02e1a8e54aa5b4ea0bcbb430c5e1bb697400fa5.webm'),
('Zaun', 'Zaun', 'Zaun is a large, undercity district, lying in the deep canyons and valleys threading Piltover. What light reaches below is filtered through fumes leaking from the tangles of corroded pipework and reflected from the stained glass of its industrial architecture. Zaun and Piltover were once united, but are now separate, yet symbiotic societies. Though it exists in perpetual smogged twilight, Zaun thrives, its people vibrant and its culture rich. Piltover’s wealth has allowed Zaun to develop in tandem; a dark mirror of the city above. Many of the goods coming to Piltover find their way into Zaun’s black markets, and hextech inventors who find the restrictions placed upon them in the city above too restrictive often find their dangerous researches welcomed in Zaun. Unfettered development of volatile technologies and reckless industry has rendered whole swathes of Zaun polluted and dangerous. Streams of toxic runoff stagnate in the city’s lower reaches, but even here people find a way to exi', 'Icon/zaun_crest_icon.png', 'Icon/zaun_emblem.png', 'Regions/zaun_theme.jpg', 'https://cmsassets.rgpub.io/sanity/files/dsfx7636/universe/7feffff28f5a4df3f58438b83d4553b37ae647e0.webm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `relate`
--

CREATE TABLE `relate` (
  `id` int(11) NOT NULL,
  `champion_id` varchar(20) NOT NULL,
  `related_id` varchar(20) NOT NULL,
  `relation_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `relate`
--

INSERT INTO `relate` (`id`, `champion_id`, `related_id`, `relation_type`) VALUES
(1, 'Ahri', 'Yasuo', ''),
(2, 'Aatrox', 'Kayn', ''),
(3, 'Ahri', 'Lillia', ''),
(5, 'Akali', 'Jhin', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `icon`) VALUES
('Assassin', 'Assassin', 'Icon/role_icon_assassin.png'),
('Fighter', 'Fighter', 'Icon/role_icon_fighter.png'),
('Mage', 'Mage', 'Icon/role_icon_mage.png'),
('Marksman', 'Marksman', 'Icon/role_icon_marksman.png'),
('Support', 'Support', 'Icon/role_icon_support.png'),
('Tank', 'Tank', 'Icon/role_icon_tank.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skins`
--

CREATE TABLE `skins` (
  `id` int(10) NOT NULL,
  `champion` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `splash_art` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skins`
--

INSERT INTO `skins` (`id`, `champion`, `name`, `splash_art`) VALUES
(2, 'Aatrox', 'Justicar', 'Splash_Art/Aatrox_1.jpg'),
(3, 'Aatrox', 'Mecha', 'Splash_Art/Aatrox_2.jpg'),
(4, 'Aatrox', 'Sea Hunter', 'Splash_Art/Aatrox_3.jpg'),
(5, 'Aatrox', 'Blood Moon', 'Splash_Art/Aatrox_4.jpg'),
(6, 'Aatrox', 'Prestige Blood Moon', 'Splash_Art/Aatrox_5.jpg'),
(7, 'Aatrox', 'Victorious', 'Splash_Art/Aatrox_6.jpg'),
(8, 'Aatrox', 'Odyssey', 'Splash_Art/Aatrox_7.jpg'),
(9, 'Aatrox', 'Lunar Eclipse', 'Splash_Art/Aatrox_8.jpg'),
(10, 'Aatrox', 'Primordian', 'Splash_Art/Aatrox_12.jpg'),
(11, 'Aatrox', 'Shan Hai Scrolls', 'Splash_Art/Aatrox_9.jpg'),
(12, 'Aatrox', 'Dragon Lantern', 'Splash_Art/Aatrox_10.jpg'),
(13, 'Aatrox', 'Prestige Dragon Lantern', 'Splash_Art/Aatrox_11.jpg'),
(14, 'Ahri', 'Dynasty', 'Splash_Art/Ahri_1.jpg'),
(15, 'Ahri', 'Midnight', 'Splash_Art/Ahri_2.jpg'),
(16, 'Ahri', 'Foxfire', 'Splash_Art/Ahri_3.jpg'),
(17, 'Ahri', 'Popstar', 'Splash_Art/Ahri_4.jpg'),
(18, 'Ahri', 'Popstar Pearl Chroma', 'Splash_Art/Ahri_5.jpg'),
(19, 'Ahri', 'Popstar Amethyst Chroma', 'Splash_Art/Ahri_6.jpg'),
(20, 'Ahri', 'Popstar Catseye Chroma', 'Splash_Art/Ahri_7.jpg'),
(21, 'Ahri', 'Challenger', 'Splash_Art/Ahri_8.jpg'),
(22, 'Ahri', 'Academy', 'Splash_Art/Ahri_9.jpg'),
(23, 'Ahri', 'Arcade', 'Splash_Art/Ahri_10.jpg'),
(24, 'Ahri', 'Star Guardian', 'Splash_Art/Ahri_11.jpg'),
(25, 'Ahri', 'Star Guardian Mythic Chroma', 'Splash_Art/Ahri_12.jpg'),
(26, 'Ahri', 'K/DA', 'Splash_Art/Ahri_13.jpg'),
(27, 'Ahri', 'Prestige K/DA', 'Splash_Art/Ahri_14.jpg'),
(28, 'Ahri', 'Elderwood', 'Splash_Art/Ahri_15.jpg'),
(29, 'Ahri', 'Spirit Blossom', 'Splash_Art/Ahri_16.jpg'),
(30, 'Ahri', 'Spirit Blossom Rose Quartz', 'Splash_Art/Ahri_17.jpg'),
(31, 'Ahri', 'K/DA All Out', 'Splash_Art/Ahri_18.jpg'),
(32, 'Ahri', 'Coven', 'Splash_Art/Ahri_19.jpg'),
(33, 'Ahri', 'Arcana', 'Splash_Art/Ahri_20.jpg'),
(34, 'Ahri', 'Snow Moon', 'Splash_Art/Ahri_21.jpg'),
(35, 'Ahri', 'Risen Legend', 'Splash_Art/Ahri_22.jpg'),
(36, 'Ahri', 'Immortalized Legend', 'Splash_Art/Ahri_23.jpg'),
(37, 'Ahri', 'Shan Hai Scrolls', 'Splash_Art/Ahri_24.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `champion_region` (`region`),
  ADD KEY `champion_role` (`role`);

--
-- Chỉ mục cho bảng `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `relate`
--
ALTER TABLE `relate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `champion_id` (`champion_id`),
  ADD KEY `related_id` (`related_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skins`
--
ALTER TABLE `skins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `champion` (`champion`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `relate`
--
ALTER TABLE `relate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `skins`
--
ALTER TABLE `skins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `champions`
--
ALTER TABLE `champions`
  ADD CONSTRAINT `champion_region` FOREIGN KEY (`region`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `champions_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `relate`
--
ALTER TABLE `relate`
  ADD CONSTRAINT `relate_ibfk_1` FOREIGN KEY (`champion_id`) REFERENCES `champions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relate_ibfk_2` FOREIGN KEY (`related_id`) REFERENCES `champions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `skins`
--
ALTER TABLE `skins`
  ADD CONSTRAINT `skins_ibfk_1` FOREIGN KEY (`champion`) REFERENCES `champions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
