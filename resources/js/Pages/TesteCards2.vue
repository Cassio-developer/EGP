<template>
  <layout>
      <v-app>
          <v-main>
              <Slider />
              <!-- <v-container class="my-10 elevation-2"> -->
              <v-container class="my-8">
                  <!-- <v-title class="text-h5">Últimas Notícias</v-title> -->
                  <!-- <h1 class="text-h5 border-b-2 border-b-blue-800 mb-4 pb-1">Notícias em Destaque</h1> -->
                  
                  <v-row>
                    <v-col cols="12" md="6">
                      <a :href=noticias[0].url> <!-- temp -->
                        <img :src=noticias[0].imagem>
                      </a>
                    </v-col>
                    <v-col cols="12" md="6">
                      <a :href=noticias[2].url> <!-- temp -->
                        <img :src=noticias[2].imagem>
                      </a>
                    </v-col>
                  </v-row>
                  <v-banner lines="one" class="mt-8 mb-4">
                      <v-text class="text-h6 text-indigo-800/90">
                          NOTÍCIAS EM DESTAQUE
                      </v-text>    
                  </v-banner>
                  
                  <v-row class="py-4">
                      <v-col cols="12" md="4" v-for="noticia in noticias">
                          <TesteCard :noticia="noticia"/>
                      </v-col>
                  </v-row>
                  <!-- <h1 class="text-h5 border-b-2 border-b-blue-800 mt-6 pb-1 text-right">Todas as Notícias</h1> -->
                  <v-banner lines="one" class="mt-4">
                      <template v-slot:actions>
                          <!-- <v-btn prepend-icon="mdi-plus" :href="route('noticias-index')" >Ver Todas as Notícias</v-btn> -->
                          <v-btn prepend-icon="mdi-plus">Ver Todas as Notícias</v-btn>
                      </template>
                  </v-banner>
              </v-container>
              <v-divider length="500px" :thickness="4" color="blue"></v-divider>
          </v-main>
      </v-app>
  </layout>
</template>

<script setup>
import Layout from "./Shared/Layout.vue";
import Slider from "../Components/Slider.vue";
import TesteCard from "../Components/TesteCard.vue";

const noticias = [
  {
      tag: "Palestra",
      titulo: "Palestra Dezembro Verde",
      autor: "Luciana",
      data: "05/12/2023",
      texto: 'No dia 14 de dezembro, a Escola de Gestão Pública estará promovendo a palestra em alusão ao Dezembro Verde com o tema "Direito e Bem-estar Animal". O evento será ministrado pelo Prefeito em Exercício Cris Moraes, da cidade de Canoas/RS, no auditório da Escola de Gestão Pública, no 2° andar do Centro Administrativo, às 9h. A palestra será aberta aos servidores do município, membros do conselho e simpatizantes. Participe! 💚 Link de inscrições: https://docs.google.com/.../1AqNr4QjmE2UVQtuM.../viewform...',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/407917016_866180562178227_3682924500607780619_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=WvVjBcf1Y5oAX8rSp_6&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfD6FukBfydaPEucLmFmFmS7W1Vz8zFOXIdHeAFYMGq0Yg&oe=657E39A1",
      url: "https://www.facebook.com/photo/?fbid=866180522178231&set=a.767378875391730"
   },
  {
      tag: "Reunião",
      titulo: "Reunião sobre Proteção Animal",
      autor: "Luciana",
      data: "21/11/2023",
      texto: "Na data de 20 de novembro de 2023, ocorreu uma reunião com a participação de Secretarias e Diretorias de Proteção Animal e Vigilâncias Ambientais dos municípios de Canoas, Esteio, Sapucaia do Sul, Estância Velha, Novo Hamburgo e São Leopoldo para tratar dos Protocolos de Atendimento dos casos de Esporotricose felina promovidas pelo COMBEM – Conselho Municipal de Proteção e Bem-Estar Animal e Secretaria Municipal de Proteção Animal de São Leopoldo-RS.",
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/404551982_856902916439325_8169276876609972106_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=wT9fHuEeO4AAX86iNGG&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfBCwvIRPv9oqub9DAhbquxZ5rtFTta2BvybeQC9yVks1Q&oe=657DB35E",
      url: "https://www.facebook.com/escoladegestaopublicasaoleopoldo/posts/pfbid02gMymteD6CqzWcR6SZSpFjw1aFSrPRX8MoKPPho8QL4CnH9SPVXey3mEnfaEgf9nPl"
  },
  {
      tag: "Seminário",
      titulo: "O papel dos Conselhos na transversalidade das políticas para as mulheres",
      autor: "Luciana",
      data: "16/11/2023",
      texto: "EGP convida: Seminário sobre o papel dos Conselhos Municipais na transversalidade das políticas públicas para as mulheres. A atividade, promovida pelo Conselho Municipal dos Direitos da Mulher (COMDIM), Coletivo Feminino Plural e Secretaria Municipal de Políticas para Mulheres (SEPOM), com apoio da EGP, acontecerá no auditório da Escola de Gestão Pública de São Leopoldo. Inscrições abertas. Participe!",
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/401659838_853745453421738_5753922918562217363_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=3635dc&_nc_ohc=4qiVHWAOOzAAX-1OgJs&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfCFJgwVV7bObJFmYBUXYq9nwyd00ERfYAV9GyTj8OLtZA&oe=657DAFF8",
      url: "https://www.facebook.com/photo?fbid=853745460088404&set=a.767378892058395"
  },
  {
      tag: "Roda de Conversa",
      titulo: "Etnias e Racialidade",
      autor: "Luciana",
      data: "10/11/2023",
      texto: "Instrutor da atividade, Prof. Carlos Pereira e participantes da 9ª Roda de Conversa: Docência na Contemporaneidade, trazendo o tema 'Etnias e Racialidade'. A formação continuada para professores municipais é promovida pelo Centro de Educação Inclusiva Paulo Freire da Secretaria Municipal de Educação (SMED) em parceria com a Escola de Gestão Pública. Viva a qualificação permanente dos agentes públicos! Viva a educação governamental!",
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/398916830_849649167164700_5244786695075201850_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=3635dc&_nc_ohc=xL8tPdTnZLoAX8frxdH&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfBHIVTUF-r4DkuevMEy7ov9U3EaFBW3x-avdHAGxiGtCw&oe=657F75B1",
      url: "https://www.facebook.com/photo?fbid=849649183831365&set=a.767378892058395"
  },
  {
      tag: "Roda de Conversa",
      titulo: "Convite: Etnias e Racialidade",
      autor: "Luciana",
      data: "07/11/2023",
      texto: 'A Escola de Gestão Pública de São Leopoldo convida para a 9ª Roda de Conversa promovida pelo Centro de Educação Inclusiva Paulo Freire (CEMEI) da Secretraria Municipal de Educação (SMED). Esta edição trará o tema: "Etnias e Racialidade". Participe! ',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/398917407_847648447364772_8797027536335776654_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=3635dc&_nc_ohc=qNnOmK2rsWcAX_aACMy&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfDC0kBiJakgsa-Zq8Ku6xsF6u4bX50xvRzze3JbZUBv4w&oe=6580DA80",
      url: "https://www.facebook.com/photo?fbid=847648450698105&set=a.767378892058395"
  },
  {
      tag: "Seminário",
      titulo: "Relações Étnico-Raciais",
      autor: "Luciana",
      data: "20/10/2023",
      texto: 'Na 10ª edição do Seminário sobre as Relações Étnico-Raciais, destacamos a importância da educação continuada na esfera pública e governamental. A Escola de Governo é uma ferramenta educacional fundamental para reaprender a história da nossa sociedade, fortalecendo a competência dos agentes públicos para  questionar preconceitos e versões excludentes, parciais e injustas sobre a construção da nossa identidade. Viva as diversidades! Viva a educação governamental!',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/397066688_842614741201476_4725344808285203032_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=3635dc&_nc_ohc=ysx3JS8WOnsAX88DIUR&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfA_LVKouxCH_mX0BCo2ThQHUP899e5I3d_gKyj2nUwpZQ&oe=657FBA80",
      url: "https://www.facebook.com/escoladegestaopublicasaoleopoldo/posts/pfbid0NzWzRVKRGeCjTR1bBEuUhFYVFqANzU32qVwuQ6y2sUKuK6JQ3HNHc5jFa7g2DrQpl"
  },    
  {
      tag: "Ciclo de Formação",
      titulo: "Políticas Públicas de Proteção e Bem-Estar Animal em São Leopoldo",
      autor: "Luciana",
      data: "03/04/2023",
      texto: 'EGP convida: I Ciclo de Formação sobre as Políticas Públicas de Proteção e Bem-Estar Animal em São Leopoldo A Escola de Gestão Pública e a Secretaria Municipal de Proteção Animal promoverão formação com o tema da proteção e bem-estar animal em São Leopoldo. O I Ciclo de Formação tem como objetivo informar e atualizar os servidores, gestores, conselheiros, protetores e comunidade sobre a legislação e as políticas públicas de proteção e bem-estar animal do Município de São Leopoldo. Para tanto, o I Ciclo iniciará com a abordagem da trajetória da mobilização social em torno da causa da proteção animal que levou à criação da Secretaria Municipal de Proteção Animal, do Conselho Municipal de Proteção Animal e do Cartório dos Animais na Delegacia de Polícia Civil de São Leopoldo. Em um segundo momento, o Ciclo tratará das políticas públicas vigentes no município, das ações realizadas pela SEMPA, e por fim, informará sobre os serviços prestados pelo Município. A formação será presencial, com um total de 4 encontros, no auditório da EGP, das 9h às 11h, dia 12/04, 19/04, 26/04 e 03/05. O público-alvo são os servidores municipais, quadros gestores, especialmente das pastas do meio ambiente, proteção animal, vigilância sanitária, saúde, educação e guarda municipal, além dos membros dos Conselhos Municipais (meio ambiente e proteção animal), parlamentares, integrantes de organizações não governamentais, protetores e simpatizantes da causa animal na comunidade. Participe!',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/339316972_696442805592998_5292163917489521188_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=3635dc&_nc_ohc=QkgJrswxVL0AX-navyU&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfA0fSS-w4SvnKkAlcKXzj6nXgGq6gTySBVwQFGA2x5Oww&oe=658102D8",
      url: "https://www.facebook.com/escoladegestaopublicasaoleopoldo/photos/a.1964954986881117/6185181384858435/"
  },
  {
      tag: "Curso",
      titulo: "Curso de LIBRAS na EGP",
      autor: "Luciana",
      data: "01/04/2023",
      texto: 'Na manhã deste sábado, 1º de abril de 2023, registramos a turma de servidoras de São Leopoldo em aula, aprendendo a comunicação em LIBRAS na Escola de Gestão Pública. Educação Governamental é ferramenta de inclusão! Governo de São Leopoldo: construindo uma cidade melhor.',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/339118675_177710035115081_7917350904960677724_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=3635dc&_nc_ohc=ex5xmsoMNHcAX-zHeqp&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfCCUSG7lIo4uuQX9aSCZemRWPTulhWiAxOQTLAagiYtsg&oe=6580D302",
      url: "https://www.facebook.com/escoladegestaopublicasaoleopoldo/photos/a.1964954986881117/6179762548733652/"
  },
  {
      tag: "Palestra",
      titulo: "Altas Habilidades ou Superdotação (AHSD)",
      autor: "Luciana",
      data: "29/03/2023",
      texto: 'EGP divulga: A Secretaria Municipal de Direitos Humanos (Sedhu) está apoiando a palestra referente às Altas Habilidades ou Superdotação (AHSD). O evento ocorrerá na quarta-feira, dia 29 de março, às 18 horas no Auditório do Colégio São Luís. Esta atividade é realizada pelo Conselho Municipal de Defesa dos Direitos das Pessoas com Deficiência, Mobilidade Reduzida e das Pessoas com Altas Habilidades/ Superdotação (Comudepe) e conta com o apoio da Prefeitura de São Leopoldo, por intermédio da Sedhu, Diretoria Pedagógica/ Nappi Smed SL, Clube da Aprendizagem, Colégio São Luis. A Escola de Gestão Pública da Prefeitura (EGP) certificará os participantes. O tema da palestra é “Altas Habilidades ou Superdotação: Entender para Transcender” e será ministrado por Michele Cousseau. A oradora é especialista em AHSD, Psicopedagogia, Educação Inclusiva, entre outras atribuições. Atua na diretoria do Conselho Brasileiro para Superdotação e do Clube de Aprendizagem. Michele Cousseau, identificada aos 7 anos de idade com a condição de altas habilidades ou superdotação. Por conta de um bullying dos colegas se privou durante muito tempo de fazer uso das suas habilidades e talentos na tentativa de ser aceita pelos colegas. Após vários anos, quando já nem se recordava mais da condição, teve a oportunidade de participar de um congresso em Sapucaia do Sul sobre o tema. Por meio de palestras sobre o assunto, Michele passou por um processo de autoconhecimento que a possibilitou perceber sua verdadeira identidade. Ela também constata a existência de uma crise no sistema de ensino no que tange aos direitos dos jovens com AHSD, na qual muitos fatores científicos são desconstruídos, enquanto mitos acabam ganhando espaço. Para participar do evento basta acessar o link abaixo e preencher o formulário: clique aqui [Texto: Bruno Zabka - Estagiário de Jornalismo | Revisão: Vanessa Bueno - Jornalista MTb.11.299 | Scom/ PMSL]',
      imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/338184921_549963113793488_4535406189047552673_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=3635dc&_nc_ohc=hE7ECIvZDlcAX95Aumr&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfDZSKbQHiFN8a7-c7xXZgIcekHaoSC7LWRNm3ly6FoB_A&oe=65808FD7",
      url: "https://www.facebook.com/escoladegestaopublicasaoleopoldo/photos/a.1964954986881117/6171102876266286/"
  }
]
</script>
