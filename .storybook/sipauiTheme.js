import { create } from '@storybook/theming';

export default create({
  base: 'dark',

  colorPrimary: '#333',
  colorSecondary: 'rgba(255,255,255, .25)',

  // UI
  appBg: '#333', //fond général visible uniquement via les marges autour de la zone de contenu
  appContentBg: '#333', //fond panneau addons
  appBorderColor: 'rgba(255,255,255, .25)', // bordures (sous filtre, sous toolbar) + séparateur d’outils + flèches index
        appBorderRadius: 3,

  // Typography
  fontBase: '"Trebuchet MS", Geneva, sans-serif',
  fontCode: 'monospace',

  // Text colors
  textColor: '#bbb', // Texte index composants
        textInverseColor: 'pink',

  // Toolbar default and active colors
  barTextColor: '#bbb', // pictos toolbar + texte onglets panneau addons
  barSelectedColor: '#fff', // texte onglets panneau addons
  barBg: '#333',

          // Form colors
          inputBg: 'pink',
          inputBorder: 'pink',
  inputTextColor: '#fff', // champ de filtre
          inputBorderRadius: 0,

  brandTitle: 'SipaUI',
  brandUrl: '/  ',
  brandImage: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAV4AAAB6CAMAAADAv8u8AAAEBGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIgogICAgeG1sbnM6ZXhpZkVYPSJodHRwOi8vY2lwYS5qcC9leGlmLzEuMC8iCiAgICB4bWxuczphdXg9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvYXV4LyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAwIgogICB0aWZmOkltYWdlV2lkdGg9IjUwMCIKICAgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoTWFjaW50b3NoKSIKICAgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFOEIyNkZGQTRFNEMxMUU5QTU2OUQ5QTk3MzFEQzM0NyIKICAgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFOEIyNkZGOTRFNEMxMUU5QTU2OUQ5QTk3MzFEQzM0NyIKICAgZXhpZkVYOkxlbnNNb2RlbD0iIgogICBhdXg6TGVucz0iIj4KICAgPHhtcE1NOkRlcml2ZWRGcm9tCiAgICBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkU4QjI2RkY4NEU0QzExRTlBNTY5RDlBOTczMURDMzQ3IgogICAgc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFOEIyNkZGNzRFNEMxMUU5QTU2OUQ5QTk3MzFEQzM0NyIvPgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KPD94cGFja2V0IGVuZD0iciI/Phw9LzcAAAGCaUNDUHNSR0IgSUVDNjE5NjYtMi4xAAAokXWRu0sDQRCHvyRKJIkoaGGRIki0UvEBQRvBBFEhSIgRfDWX85IISTzuIhJsBVtBQbTxVehfoK1gLQiKIoiNjbWijco55wkRMbPMzre/3Rl2Z8GdyqsFs6YbCsWSkRyJhqamZ0LeR2rx4yNIWFFNfSiRiFPV3m5w2fGq065V/dy/5p/XTBVcdcKDqm6UhEeF48sl3eZN4WY1p8wLHwt3GHJB4WtbTzv8ZHPW4Q+bjVQyBu5G4VD2F6d/sZozCsLycsKF/JL6cx/7JQGtODkhsVU8iEmSEaKEGGOYGBF6GJA5Qie9dMmKKvnd3/njLEquKrNOGYMFsuQo0SHqklTXJGZE12TkKdv9/9tXM9PX61QPRKH2wbJe2sC7AZ/rlvW+b1mfB+C5h7NiJX9xD/pfRV+vaOFdaFiFk/OKlt6C0zVoudMVQ/mWPOLuTAaej6B+GpouwTfr9Oxnn8NbSK3IV13A9g60y/mGuS82+WfQVWNw/wAAAwBQTFRFtx9IsAc04qW22Ymeti5ItRVAuCFK4rm/tS1HxGZ1vUtf6r3K89visAUyuSJLzH6KsQk25a692Yac78/YtzVO4J+w1X2V783XyFRz7MXQ1XuU1HeQwT5hsxA7thpDsAYzxERm7tfa7cbQynmG0YyXuiVN/PX3yHF/sA400o6ZvEld35qsrwcx6s7S6cnO3a61wDdc0W2IwVts5sXKwT1huTxStRdCtRdB3ZWo9eHm1HmRtxtEthlDtRhCuylQ+Ozvz2qFynaDrwIw0nCK57PB/v3937G42qWt+fHy7NLWvC1Tv1NlvzZb8dXdvC5V7NHVwFZo58bKtStG/fr7////zYGNyll3vTJX4aGy68LN2aGpzmWC89rh26iv5rHA8+Pl152mzmOA9uPo47zC2oyh5Kq5sgw58d7h3KuywTxfwDle9eLn8M/Y/Pf4w0Vnsw460GuG+Ojs35yu1HmS9eLo0nONzF58x05vxEdqxEpsyVh30W6J2oyh6brIwDpe+/X23peq05Od0GyHsAsz46e4vzVb79DZ/v3+68XQxEZouytRxktssBE2u0RZshw84qa22ISb0IqVxk1u1Zih8drf+vT12o2i7NPW9ubq2J6mxmt6+vDy57XC6brGuyhP6LbEukJY4J2v8NHa9N3j03WO7crTrQIwtCRB9unsxWh3w2JysAMxxUlqpgIt+OvvvCtSx09w57bEyneE/vv8uSFJzWJ/4qK09+fs9+3uw0JluB9I2ZOjshk7uTxTvU5h5cHGtjBK14KZ7tjbzF570XKM+e7xuDdP/Pj57MLNtRhBuSNMz4aRy1x6+/L01HqS3pirsxM81XyTrwQy7MPO4bW8tx1G0IiTxVdwukBW+e/y0XCK79nc7dXY9+zttChEzmN/zF16syA/5L7Du0Zb0YuWsRQ36s3R8N3gz4eS4LO6rwQx1pqjyHKA2aKqtxxF35uu68HM7MLN4aO0zWSBzoKO05GbyXSB4bi+79rdtzNMsh497dbZvU5hz4WQ5L3DJkXJlF5C9wAAAQB0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AFP3ByUAAAAJcEhZcwAACxMAAAsTAQCanBgAABaMSURBVHic7ZwLdBRVmscTSQivMUEPhDMQOKKYMHYSJxI2KCDUoUIrMSFUA64SsiommJ2WVdEdOAdzIDLN4aFopiGY0WFBKjFMIdggiXDIgJCeYWDNhoggBHYDkQV3lDMYnie7W497b91bdau6qpMixOkvqX7cunUfv/uvr766VdVRTMQctKjubsBP2yJ4HbUIXkctgtdRi+B11CJ4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',
});
