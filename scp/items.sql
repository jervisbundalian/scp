-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 09:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scp`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item` varchar(20) NOT NULL,
  `object` varchar(20) NOT NULL,
  `procedures` text NOT NULL,
  `description` text NOT NULL,
  `reference` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item`, `object`, `procedures`, `description`, `reference`, `image`) VALUES
(1, 'SCP-002', 'Euclid', 'SCP-002 is to remain connected to a suitable power supply at all times, to keep it in what appears to be a recharging mode. In case of electrical outage, the emergency barrier between the object and the facility is to be closed and the immediate area evacuated. Once facility power is re-established, alternating bursts of X-ray and ultraviolet light must strobe the area until SCP-002 is re-affixed to the power supply and returned to recharging mode. Containment area is to be kept at negative air pressure at all times.', 'SCP-002 resembles a tumorous, fleshy growth with a volume of roughly 60 m³ (or 2000 ft³). An iron valve hatch on one side leads to its interior, which appears to be a standard low-rent apartment of modest size. One wall of the room possesses a single window, though no such opening is visible from the exterior. The room contains furniture which, upon close examination, appears to be sculpted bone, woven hair, and various other biological substances produced by the human body. All matter tested thus far show independent or fragmented DNA sequences for each object in the room.', 'To date, subject has been responsible for the disappearances of seven personnel. It has also in its time at the facility further furnished itself with two lamps, a throw rug, a television, a radio, a beanbag chair, three books in an unknown language, four childrens toys, and a small potted plant. Tests with a variety of lab animals including higher primates have failed to provoke a response in SCP-002. Cadavers as well fail to produce any effect. Whatever process the subject uses to convert organic matter into furnishings is apparently only facilitated by the introduction of living humans.', 'SCP002.jpg'),
(2, 'SCP-003', 'Euclid', '                                        SCP-003 is to be maintained at a constant temperature of no less than 35°C and ideally kept above 100°C. No living multicellular organisms of Category IV or higher complexity may be allowed to come into contact with SCP-003.\r\n\r\nIn event of total power failure, if SCP-003-1 begins to increase its mass, assigned personnel must engage in skin contact with SCP-003-1. Ideally, personnel may use their body heat to return SCP-003-1 to above the critical temperature; however, skin contact must be maintained even in event of SCP-003 reaching activation temperature, lasting at minimum until SCP-003-1 advances fully to its second growth stage.\r\n\r\nPersonnel who enter SCP-003\'s containment area must first be examined for body parasites of Category IV or higher complexity, and sterilized if such organisms are present. All personnel who have come in physical contact with SCP-003-1 are to immediately report for sterilization afterwards.\r\n\r\nSCP-003-1 must not be removed from SCP-003-2 except in case of emergency procedures detailed above. Any significant change in SCP-003-2\'s rune activity (including pattern, frequency, or color) should be reported within three (3) hours of occurrence. Cessation of rune activity must be reported immediately. SCP-003-2 must be supplied with power via the source designated Generator 003-IX at all times. asd                                        ', '                                        SCP-003 consists of two related components of separate origin, referred to as SCP-003-1 and SCP-003-2.\r\n\r\nSCP-003-1 appears to be composed of chitin, hair, and nails of unknown biology, arranged in a configuration similar to that of a computer motherboard. Testing reveals SCP-003-1 to predate earliest known circuit boards by a factor of thousands of years. SCP-003-1 is considered sentient but not actively dangerous except under certain conditions.\r\n\r\nSCP-003-1 was found on a stone tablet, SCP-003-2, on which it currently resides. The runes on SCP-003-2 are not part of any known language, and emit pale, flickering light patterns.\r\n\r\nSCP-003-2 is controlled by a (non-biological) internal computer, the contents of which are mostly inaccessible without risk of damaging SCP-003-2. SCP-003-2 is capable of controlled emissions of radiation, including heat, light, and anomalous radiation types. SCP-003-2 contains an internal power source of an anomalous nature, which appears to have been losing power since several centuries before discovery. asd                            ', '                                        Addendum 003-01:\r\nActing on information gathered from linguistic analysis of SCP-003-2\'s runes and comparative data analysis, Research Team M03-Gloria has managed to establish a link between SCP-003 and [DATA EXPUNGED] for analysis of functions. SCP-003-1 must now be considered sentient, and is to be kept a minimum of 1 km from [DATA EXPUNGED] and the resulting &amp;amp;quot;by-product&amp;amp;quot; at all times.\r\n\r\nAddendum 003-02:\r\nSCP-003-2\'s power loss has been exacerbated by the procedures performed by M03-Gloria. On orders of O5-10, M03-Gloria will continue procedures.\r\n\r\nAddendum 003-03:\r\nDuring M03-Gloria procedures, SCP-003-1 doubled its mass and began rapid structural growth. Temperature was immediately returned to 100°C. Growth and mass increase of SCP-003-1 continued for 9 minutes and 6 seconds, at which time a sustained radiation spike was produced by SCP-003-2. In response, SCP-003-1 returned to its normal state in 3 minutes and 39 seconds. New growth dissolved into a dusty residue which was collected for analysis. Both SCP-003-1 and SCP-003-2 ceased all detectable activity. SCP-003-2 did not resume activity until connected to external power source. SCP-003-2\'s runes glowed uniformly gray and did not resume normal activity for three (3) hours. SCP-003-2 no longer appears to be able to maintain containment area at a temperature above 35°C without external power supplied by Generators 003-III through IX.\r\n\r\nAddendum 003-04:\r\nThe procedure detailed in Addendum 003-03 was repeated, and SCP-003-1 again entered a growth state. After 10 minutes and 13 seconds, SCP-003-2 once again produced a sustained radiation spike. SCP-003-1\'s growth stopped for 36 seconds, then resumed at its previous pace.\r\n\r\nOn quadrupling its mass, SCP-003-1 formed a coherent outer shell and body. After appearing to scan its environment and partially converting its environment, SCP-003-1 then breached containment, entering the observation gallery where nine members of M03-Gloria were present. On physical contact with team members, SCP-003-1 encompassed them in rapidly-grown appendages and stopped growth for 15 minutes. SCP-003-1 then resumed growth, and rearranged the component parts of the center of its form to the shape of a three-meter-tall female humanoid, with peripheral &amp;amp;quot;tentacles&amp;amp;quot; shifting to extrude primarily from SCP-003-1\'s newly formed &amp;amp;quot;hair&amp;amp;quot; and spine. SCP-003-1 then produced rudimentary vocalizations in an apparent initial attempt to communicate with researchers. [DATA EXPUNGED]\r\n\r\nAn unknown individual approached the compromised containment area in company of a full squad of agents. The individual claimed to be acting on orders of O5-10 and attempted communication with SCP-003-1. [DATA EXPUNGED]\r\n\r\nFollowing this incident, Agent Jackson of M03-Gloria successfully restored power to SCP-003-2 and activated backup generators to return the temperature to 100°C. SCP-003-1 returned to its normal state in 21 minutes and 7 seconds, and was successfully re-contained without incident.\r\n\r\nAll nine members of M03-Gloria affected by SCP-003-1 were afterwards found to be physically unharmed, with no residual effects besides psychological trauma. The converted materials of SCP-003\'s former containment area did not dissolve and are now under analysis.\r\n\r\nAddendum 003-05:\r\nIn light of the previous incident, O5-10 was removed from the O5 Council by joint decision of O5-██, O5-██, and O5-██. M03-Gloria procedures have been indefinitely suspended. asd                            ', ''),
(3, 'SCP-004', 'asd', '                                                When handling items SCP-004-2 through SCP-004-13, proper procedure is vital. The items are not permitted to be moved off-site unless accompanied by two Level 4 security personnel. Under no circumstances should any other component of SCP-004 be taken through SCP-004-1. The effects of doing so are as yet unknown, and the current cost of experimentation makes further research impractical. Should any of the objects contained within SCP-004-1 breach containment, or the facility be breached, the keys must be brought inside and the door closed prior to activation of Site 62’s on-site warhead. Unauthorized removal of keys from the testing area is grounds for immediate termination.\r\n\r\nLevel 1 clearance is required for basic access to SCP-004-1; Level 4 clearance is required for use of SCP-004-2 to -13.                                                ', '                                                SCP-004 consists of an old wooden barn door (SCP-004-1) and a set of twelve rusted steel keys (SCP-004-2 through SCP-004-13). The door itself is the entrance to an abandoned factory in [DATA EXPUNGED].                                                ', '                                                Chronological History\r\n07/02/1949: A group of three juveniles trespassing on federal property near ██████████ find the door. According to their testimony, they found a set of rusted keys in an iron lockbox and determined what door the keys unlock. The juveniles are taken into custody after they contact Sheriff █████████████████ when one of their friends (SCP-004-CAS01) goes missing.\r\n\r\n07/03/1949: Local authorities find the severed right hand of SCP-004-CAS01 eight kilometers from SCP-004-1. Other parts of SCP-004-CAS01\'s body are found scattered as far as 32 km from the factory. Under interrogation, the apprehended juveniles tell authorities that upon opening the door with one of the keys, SCP-004-CAS01 was torn into several pieces, each of which disappeared. At this point, the SCP Foundation takes over the investigation.                                                ', 'SCP004_door.jpg'),
(4, 'SCP-005', 'Safe', 'SCP-005 poses no immediate risk in any direct sense. Even so, its unique functions require special measures be taken to restrict access and manipulation of the object. Approval of at least one (1) Level 4 personnel is required for the removal of the object from its containment area.', 'In appearance, SCP-005 resembles an ornate key, displaying the characteristics of a typical mass produced key used in the 1920s. The key was discovered when a civilian used it to infiltrate a high security facility. SCP-005 seems to have the unique ability to open any and all forms of lock (See Appendix A), be they mechanical or digital, with relative ease. The origin of this ability has yet to be determined.\r\n\r\n', 'SCP-005 may be used as a replacement for lost security passes, but only under the supervision of at least one (1) Level 4 personnel. SCP-005 may not be used for vending machine repairs, opening lockers, or for any personnel\'s spare home key. Removal of the object from the compound will result in immediate termination.', 'SCP005.jpg'),
(32, 'SCP-006', 'Safe', 'Whereas the nature of SCP-006 does not warrant any extensive containment, a certain level of secrecy is necessary regarding the object\'s existence and properties, for obvious reasons. The following procedures are required not for personnel safety, but to deny or hide knowledge of SCP-006\'s effects from the personnel who interact with it.', 'SCP-006 is a very small spring located 60 km west of Astrakhan. Foundation Command was aware of its existence since the 19th century, but were unable to secure it until 1991 due to political reasons. On the spot of the spring, a chemical factory has been constructed as a disguise, with the majority of laborers under Foundation and/or Russian control. The liquid emitted from the spring has been chemically identified as simple mineral water in 1902, but has the unusual property of &quot;health&quot;.', 'Ingesting the liquid produces the following properties in human beings: the ability to regenerate DNA damaged by sufficient duplication, heightened excitement of cellular duplication, vastly improved abilities in the repair of damaged tissue, and a frightening increase in the effectiveness of the human immune system. Upon testing the liquid on animal subjects, hostile bacteria and viral agents were destroyed immediately. Many reptiles and birds were unaffected, while higher primates experienced the same benefits as humans.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
