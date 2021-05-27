@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">About Team</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <li><a href="/">Home</a></li>
                    <li class="active">About</li>
                    <li class="active">Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="team m-md-5 p-md-5">
    <div class="container">
        
        <div class="row" style="padding: 10px">
                
            <div class="col-12" id="cairo" style="margin-top: 0px">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">The British University in Egypt</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/ihab.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Ihab Adly  </h3>
                                <p class="text-justify">
                                    Ihab Adly works as a lecturer and researcher at the Electrical Engineering Department, the British University in Egypt. Actively involved in digital design and system on chip consultations for two decades, participated in the conception, development and evaluation of several research projects. Supervised more than 3 PhD and 16 MSc. students, with more than 30 international publications. Member of the IEEE, EITESAL communities and member of the Center for Emerging Learning Technologies (CELT) at The British University in Egypt. Research interests: FPGA design, Wireless Sensor Networks, Internet of Things (IoT), Industrial Internet of Things (IIoT), industrial automation, and SoC design.
                                </p>
                                <p><strong>Google Scholar profile at:</strong> <a href="https://scholar.google.com.eg/citations?user=8Zq0QUoAAAAJ">https://scholar.google.com.eg/citations?user=8Zq0QUoAAAAJ</a></p>
                                <p><strong>Scopus profile at (h-index 4):</strong> <a href="https://www.scopus.com/authid/detail.uri?authorId=8507404400">https://www.scopus.com/authid/detail.uri?authorId=8507404400</a></p>
                                <p><strong>ResearchGate profile at:</strong> <a href="https://ww.researchgate.net/profile/Ihab_Adly">https://ww.researchgate.net/profile/Ihab_Adly</a></p>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">Ain Shams University, Cairo, EGYPT</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/hani.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Hani F. RAGAI  </h3>
                                <p class="text-justify">
                                    Hani F. RAGAI received the B.Sc. and M.Sc. degrees from Ain Shams University, Cairo, Egypt in 1967 and 1972 respectively. He received the "Doctorat de Specialité" and the "Doctorat d'Etat" in electronics from Grenoble University and Institute Polytechnique de Grenoble (INPG), France in 1976 and 1980 respectively. From 1972 to 1979 he was a research assistant at LETI and then at THOMSON-EFCIS from 1979 to 1980, both in Grenoble, France. He then joined the Electronics and Communication Engineering Department, Faculty of Engineering, Ain Shams University as assistant professor. Since 1990 he is a professor of electronics in the same department where he is also the director of the "Integrated Circuits Lab" from 1980 to 2006. Since 2006 he became professor emeritus at Ain Shams University and is also seconded to the French University of Egypt as head of the Information and Communications Technology department. Then he is back to Ain Shams University till now. His research interests include modeling and characterization of MOS devices, electrochemistry of silicon surfaces, MEMS-based sensors, ultra-low power ASICs for UWB communications and wireless sensor nodes, wireless sensor networks and IoT applications and energy scavenging techniques.
                                </p>
                                <p><a href="https://sites.google.com/view/icl/members/hani-ragai">https://sites.google.com/view/icl/members/hani-ragai</a></p>
                                <p><a href="https://www.researchgate.net/profile/Hf_Ragai">https://www.researchgate.net/profile/Hf_Ragai</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/hossam.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Hossam Sayour  </h3>
                                <p class="text-justify">
                                    Prof. Dr. Hossam Sayour is a Professor of Bioanalytical Chemistry. He works at the Biomedical Chemistry Unit, Chemistry Dept., Animal Health Research Institute, Giza, Egypt. Prof. Sayour was born in Cairo, 23th. June, 1965 and earned his B.Sc. (1987) M.Sc. (1992) & Ph.D. (2001) in chemistry from Faculty of Science, Ain Shams University. As a golden member of society of molecular imprinting since 2009 and my participation in their biannual scientific conferences (Paris, 2012, 2014), he planned to address the merits of Molecular Biomimetics in Egypt (2015) through multidisciplinary research group (physics, chemistry, molecular biology, biotechnology, bioinformatics, veterinary medicine and ECE Engineering) doing mutual research projects which is one of his grand priorities through Molecular Biomimetics Research Group (MBRG).
                                </p>
                                <p>
                                    <a href="https://www.youtube.com/watch?v=MKwI_UQ9Qk4">https://www.youtube.com/watch?v=MKwI_UQ9Qk4</a> <br>
                                    <a href="https://www.scopus.com/authid/detail.uri?authorId=6507166280">https://www.scopus.com/authid/detail.uri?authorId=6507166280</a> <br>
                                    <a href="http://orcid.org/0000-0002-9244-8085">http://orcid.org/0000-0002-9244-8085</a> <br>
                                    <a href="https://www.researchgate.net/profile/Hossam_Sayour">https://www.researchgate.net/profile/Hossam_Sayour</a> <br>
                                    <a href="https://ieeexplore.ieee.org/author/37086326920">https://ieeexplore.ieee.org/author/37086326920</a> <br>
                                    <a href="https://www.linkedin.com/in/hossam-sayour-28779412/">https://www.linkedin.com/in/hossam-sayour-28779412/</a> <br>
                                    <a href="https://www.linkedin.com/in/hossam-sayour-28779412/">https://www.linkedin.com/in/hossam-sayour-28779412/</a> <br>
                                </p>
                                <p><strong>Egyptian Chapter of Society of Molecular Imprinting: </strong>
                                    <a href="https://www.mipsoc.org/SMI/showgroup.php?group=1245">https://www.mipsoc.org/SMI/showgroup.php?group=1245</a> <br>
                                </p>
                                <p><strong>Molecular Biomimetic Research Group: </strong>
                                    <a href="https://www.linkedin.com/groups/12323425/">https://www.linkedin.com/groups/12323425/</a> <br>
                                </p>
                                <p><strong>Guest Editorial Board: </strong>
                                    <a href="https://www.frontiersin.org/journals/environmental-chemistry#editorial-board">https://www.frontiersin.org/journals/environmental-chemistry#editorial-board</a> <br>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/kirah.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Khaled Kirah  </h3>
                                <p class="text-justify">
                                    Khaled Kirah is a professor of Engineering Physics at the Faculty of Engineering, Ain Shams University in Egypt. He holds a BSc in Electronics and an MSc in Integrated Optics, both from Ain Shams University. He obtained his PhD through the channel system with the University of Bath, England in the domain of Silicon electrochemistry. His current research area is in the fields of nanophotonics and solar cells. He supervised 5 PhD and 6 MSc students with more than 37 international publications. He is member of The International Society for Optics and Photonics (SPIE).
                                </p>
                                <p><strong>Scopus profile at (h-index 8): </strong>
                                    <a href="https://www.scopus.com/authid/detail.uri?authorId=6505930223">https://www.scopus.com/authid/detail.uri?authorId=6505930223</a> <br>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">Egyptian Atomic Energy Authority-EG</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/ola.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Ola M. Gomaa </h3>
                                <p class="text-justify">
                                    Professor Dr. Ola M. Gomaa is the Head of the Radiation Microbiology Department at the National Center for Radiation Research and Technology (NCRRT), Egyptian Atomic energy Authority (EAEA), Cairo, Egypt. She is also the Scientific Advisor for the Central Laboratory Unit at NCRRT. Her research focuses on biofilm based wastewater treatment, biofilm engineering and studying biofilm properties to enhance electroactive bioremediation in Bioelectrochemical systems. Her research on enhancing cell adhesion to electrode surface for wastewater treatment has been the main priority in her lab for the past 10 years. She is Newton-Mosharafa Alumni, UK Daniel Turnberg Alumni, Fulbright Alumni. She received many national and international grants. She is a review editor at Frontiers in Bioengineering and Biotechnology, on the editorial board of Journal of Chemical Technology and Biotechnology (JCTB), Wiley and Associate editor in Journal of Radiation Research and Applied Sciences, Taylor& Francis. She was a Project Officer for Action Coordinated projects at the Ministry of Higher Education and Scientific Research (MEHSR) in Cairo as a partner in an EU consortium for the following projects: "Shaping Egypt’s association to the European Research Area and Cooperation Action" (ShERACA Plus), Mediterranean Science, Policy, Research &Innovation Gateway (MedSPRING) and Science, Technology and Innovation Cooperation between Sub-Saharan Africa and Europe (CASTNET-Plus). Gomaa has organized and chaired the 1st International conference on Microbial Electron Transfer in Africa and Egypt in Sept. 2019. has been recently appointed as an Ambassador for the International Society for Microbial Electron Transfer (ISMET).
                                </p>
                                <p>
                                    <strong>Contact:</strong> <span>olagomaa4@gmal.com</span> <br> 
                                    <a href="https://www.researchgate.net/profile/Ola_Gomaa">https://www.researchgate.net/profile/Ola_Gomaa</a>
                                    <p>Twitter @OlaGomaa</p>
                                </p>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>

                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">Helmholtz Centre for Environmental Research – UFZ</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/falk.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Prof. Dr. Falk Harnisch </h3>
                                <p class="text-justify">
                                    Falk Harnisch is an internationally well recognized for his expertise at the interface of electrochemistry and microbiology, as e.g. reflected in more than 120 peer-reviewed paper (h-index of 42, scopus) as well as 1 book, and several awards (UFZ-Research-Award, Helmholtz Young Investigators Group by the Helmholtz Association and the UFZ; Research Award Next generation biotechnological processes by the German Federal Ministry of Education and Research (BMBF) and Australia Award: Endeavour-Research Fellowship. Among others, he was Co-speaker of the Future Panel of the DECHEMA and is President-elect of the International Society of Microbial Electrochemistry and Technology.
                                </p>
                                <p>
                                    <a href="https://www.researchgate.net/profile/Falk_Harnisch">https://www.researchgate.net/profile/Falk_Harnisch</a><br>
                                    <a href="https://www.ufz.de/index.php?en=38424">https://www.ufz.de/index.php?en=38424</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/korth.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Dr. Benjamin Korth </h3>
                                <p class="text-justify">
                                    Benjamin Korth devotes himself to investigations of thermodynamics of electroactive microorganisms. By doing so, he developed new tools (e.g., bioelectrocalorimetry, mathematical modeling platform) for analyzing the energetic fundamentals of electroactive microorganisms and bioelectrochemical systems as well as developed methods for the energetic analysis and treatment of wastewater. He published 12 peer-reviewed papers and 1 book chapter and received the Helmholtz-PhD award in the research area "Energy" as well as several awards for oral presentations in international conferences and in public science events.
                                </p>
                                <p>
                                    <a href="https://www.researchgate.net/profile/Benjamin_Korth">https://www.researchgate.net/profile/Benjamin_Korth</a><br>
                                    <a href="https://www.ufz.de/index.php?de=39100">https://www.ufz.de/index.php?de=39100</a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">University of Salerno – Italy</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/naddeo.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Vincenzo Naddeo, PhD </h3>
                                <p class="text-justify">
                                    Prof. Vincenzo Naddeo (納文 森 - for the appointments in Taiwan) is Director of the Sanitary Environmental Engineering Division (SEED) at the Department of Civil Engineering of the University of Salerno (Italy), where he drives research and academic activities in the Environmental Engineering fields. dr. Naddeo serves as an affiliate professor at both the Department of Civil and Environmental Engineering of the University of Washington (Seattle, WA, USA) and at the Department of Water Resources and Environmental Engineering of the Tamkang University (New Taipei City, Taiwan). prof. Naddeo is an expert member of the National Committee on IPPC (Integrated Pollution Prevention and Control) of the Italian Ministry of the Environment. Since 2018 Prof. Naddeo is CEO and co-founder of Sponge s.r.l., a Spin-Off of the University of Salerno working on Environmental Technology. Prof. Naddeo was the general chair of the international conference series Water Energy NEXUS. He is also actively involved in various scientific organizations, funding agencies, and European networks. prof. Naddeo serves the editorial board of several ISI journal, and he is (co-)author of over 200 refereed publications in ISI journals, congress proceedings and book volumes and he hold seven patents on innovative green technologies.
                                </p>
                                <p>
                                    <a href="www.about.me/vincenzo.naddeo">www.about.me/vincenzo.naddeo</a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">Universitat de Girona – UdG</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/puig.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Sebastià Puig </h3>
                                <p class="text-justify">
                                    Sebastià Puig is Associate Professor at the University of Girona (Spain). His research is focused on environmental and white biotechnology in water and air streams. He is interested in giving a second chance to contaminated water and recalcitrant carbon dioxide streams within a water-resource nexus approach. Dr Puig has participated in more than 30 research projects and RD contracts and I am currently the UdG principal investigator of two H2020 EU projects (BioRECO2VER and ELECTRA), one Swedish (ELECTROSYMBIOSIS), two national projects (COOMET and WAFRA) and one industrial EU H2020 project as subcontracted (SCALIBUR). His scientific production includes 93 publications in international peer-reviewed journals, h-index 35– and over 100 congress publications, 14 book chapters and three European patents on microbial electrochemical technologies. Moreover, Dr Puig has supervised 4 postdoctoral researchers, 7 doctoral theses and 11 master theses.
                                </p>
                                <p>
                                    <a href="http://orcid.org/0000-0003-2995-1443">http://orcid.org/0000-0003-2995-1443</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/pous.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Narcís Pous </h3>
                                <p class="text-justify">
                                    Dr. Narcís Pous is a researcher at the group the University of Girona. He completed his Master and PhD studies in the University of Girona. During his PhD, he performed research stays at INR-LBE (Narbonne, France) with Prof. Nicolas Bernet and Dr. Alessandro Carmona-Martínez; CNR-IRSA (Monterotondo, Italy) with Dr. Federico Aulenta and UFZ (Leipzig, Germany) with Dr. Falk Harnisch and Dr. Christin Koch. His academic career as a post-doc continued by getting hired for the national project “NONIT” (2014-2016), and then by the EU-funded projects “INNOQUA” (2016-2019), “WAFRA” (2019-2021) and “ELECTRA” (from 2019).
                                </p>
                                <p>
                                    <a href="https://orcid.org/0000-0003-2034-1251">https://orcid.org/0000-0003-2034-1251</a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table mt-5">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h2 style="font-weight: bold; margin-bottom: 5px; margin-top: 5px">University of Tunis El Manar – Higher Institute for Applied Biological Sciences of Tunis ISSBAT</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/wided.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Wided Ben Ammar </h3>
                                <p class="text-justify">
                                    Dr. Wided Ben Ammar-Jamel is Assistant Professor at the Higher Institute for Applied Biological Sciences of University of Tunis El Manar since 2011. She is also a researcher in the Laboratory of Olive Biotechnology at the Centre of Biotechnology of BorjCedria. Her research activities focus on plants physiology under abiotic stress: effects of pollutants on physiological parameters, signalization of aggression in plants and modality of plant responses. Dr Ben Ammar has supervised various thesis research works of Master and License. In addition to that, She is one of the instructors of the aquaponic sessions organized by the Technical Center of Aquaculture in Tunisia.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/atef.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Atef JAOUANI </h3>
                                <p class="text-justify">
                                    Eng PhD Hab Atef JAOUANI is associate professor at the University of Tunis El Manar - The Higher Institute for Applied Biological Sciences of Tunis. He is specialist of environmental bioprocesses and the exploitation of microbial bioresources. He leads a team of several young researchers working mainly within the framework of international projects. He is currently involved in several research projects H2020, PRIMA Section 1 and ENI Tunisia - Italy where he leads several WPs. He has published around 50 international scientific papers and more than 100 lectures in international conferences. Mr JAOUANI has supervised several Doctoral, Master, Engineer and License thesis research work. He regularly participates in dissertation juries in Tunisia and abroad and evaluates project proposals for several national and international donors. He is a member and founding member of several Tunisian and international scientific associations. He is also a third-party accreditation auditor for analysis and testing laboratories.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%;">
                                <img src="{{asset('/frontendFiles/img/team/mouna.png')}}" class="img-responsive" style="width: 100%;">
                            </td>
                            <td>
                                <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 1.6em;"> Mouna MARRAKCHI </h3>
                                <p class="text-justify">
                                    Eng PhD Hab Mouna MARRAKCHI is currently Associate Professor at the University of Tunis El Manar - Higher Institute of Applied Biological Science of Tunis. Her research activities deal with the design and the development of a variety of bioassays and electrochemical biosensors using different type of bioreceptors (such as enzymes, microorganisms, antibodies, aptamers and nucleic acids) and nanomaterials. Dr Marrakchi has received numerous awards including the 2014 and 2015 Arab American Frontiers fellowship, the French High-Level Scientific Fellowship in 2014, and Fulbright visiting scholarship in 2013. She is involved in several international research projects (ERANETMED, French-Tunisian PHC, Spanish-Tunisian…) where she leads several WPS and national federated projects (member of consortia related to the design of new electrochemical and optical sensing tools for SARS-CoV2 virus (PRF-COVID19). She also published around 20 publications and book chapters.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</section>

@endsection